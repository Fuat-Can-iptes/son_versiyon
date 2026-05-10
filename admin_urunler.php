<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header("Location: index.php");
    exit;
}

// Ürün Silme İşlemi
if (isset($_GET['sil_id'])) {
    $sil_id = $_GET['sil_id'];
    try {
        $db->prepare("DELETE FROM ProductFeatures WHERE ProductId = ?")->execute([$sil_id]);
        $db->prepare("DELETE FROM products WHERE Id = ?")->execute([$sil_id]);
        header("Location: admin_urunler.php?durum=silindi");
        exit;
    } catch (Exception $e) {
        $hata = "Silme hatası: " . $e->getMessage();
    }
}

// ARAMA MANTIĞI
$arama = isset($_GET['q']) ? trim($_GET['q']) : '';
$sorgu_ek = "";
$parametreler = [];

if ($arama !== '') {
    $sorgu_ek = "WHERE p.Name LIKE ? OR p.SKU LIKE ?";
    $parametreler[] = "%$arama%";
    $parametreler[] = "%$arama%";
}

// Ürünleri Çekme
$sorgu = $db->prepare("
    SELECT p.*, c.Name as CategoryName 
    FROM products p 
    LEFT JOIN categories c ON p.CategoryId = c.Id 
    $sorgu_ek
    ORDER BY p.Id DESC
");
$sorgu->execute($parametreler);
$urunler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Yönetimi - Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f1f5f9; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif;}
        .admin-content { margin-left: 260px; padding: 30px; }
        .admin-table-container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th { background: #f8fafc; color: #475569; padding: 12px; text-align: left; border-bottom: 2px solid #e2e8f0; }
        .admin-table td { padding: 15px 12px; border-bottom: 1px solid #e2e8f0; color: #334155; vertical-align: middle;}
        
        .btn-add { background: #ff6600; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .btn-delete { color: #ef4444; text-decoration: none; font-weight: bold; }
        
        .search-form { display: flex; gap: 10px; margin-bottom: 20px; }
        .search-input { padding: 10px 15px; width: 350px; border: 1px solid #cbd5e1; border-radius: 5px; outline: none; }
        .search-btn { background: #1e293b; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .clear-btn { background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; }
        
        .stock-input { width: 70px; padding: 8px; border: 1px solid #cbd5e1; border-radius: 4px; font-weight: bold; text-align: center; }
        .stock-input:focus { border-color: #ff6600; outline: none; }
    </style>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>

    <main class="admin-content">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="margin: 0; color: #1e293b;"><i class="fa-solid fa-boxes-stacked"></i> Ürün Yönetimi</h2>
            <a href="urun_ekle.php" class="btn-add"><i class="fa-solid fa-plus"></i> Yeni Ürün Ekle</a>
        </div>

        <form class="search-form" method="GET">
            <input type="text" name="q" class="search-input" value="<?php echo htmlspecialchars($arama); ?>" placeholder="Ürün adı veya SKU koduna göre ara...">
            <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i> Ara</button>
            <?php if($arama !== ''): ?>
                <a href="admin_urunler.php" class="clear-btn">Temizle</a>
            <?php endif; ?>
        </form>

        <?php if(isset($_GET['durum']) && $_GET['durum'] == 'silindi'): ?>
            <div style="background: #dcfce3; color: #166534; padding: 10px; border-radius: 5px; margin-bottom: 15px;">Ürün başarıyla silindi!</div>
        <?php endif; ?>

        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th> <!-- ID Başlığı Eklendi -->
                        <th>Görsel</th>
                        <th>Ürün Adı</th>
                        <th>Kategori</th>
                        <th>Fiyat</th>
                        <th>Stok Düzenle</th>
                        <th>Stok Kodu (SKU)</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($urunler) > 0): ?>
                        <?php foreach($urunler as $u): ?>
                        <tr>
                            <!-- Veritabanı ID'si Gösteriliyor -->
                            <td><strong>#<?php echo $u['Id']; ?></strong></td>
                            
                            <td><img src="<?php echo htmlspecialchars($u['ImagePath']); ?>" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td>
                            <td><strong><?php echo htmlspecialchars($u['Name']); ?></strong></td>
                            <td><?php echo htmlspecialchars($u['CategoryName']); ?></td>
                            <td><?php echo number_format($u['Price'], 2, ',', '.'); ?> TL</td>
                            
                            <td style="white-space: nowrap;">
                                <input type="number" 
                                       class="stock-input" 
                                       data-id="<?php echo $u['Id']; ?>" 
                                       value="<?php echo $u['Stock']; ?>"
                                       style="color: <?php echo $u['Stock'] < 5 ? '#ef4444' : '#166534'; ?>;">
                                <span id="status-<?php echo $u['Id']; ?>" style="display:inline-block; width: 25px; margin-left: 5px;"></span>
                            </td>
                            
                            <td><code style="background: #f1f5f9; padding: 3px 6px; border-radius: 4px;"><?php echo htmlspecialchars($u['SKU']); ?></code></td>
                            <td>
                                <a href="admin_urunler.php?sil_id=<?php echo $u['Id']; ?>" class="btn-delete" onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?');"><i class="fa-solid fa-trash"></i> Sil</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Colspan 7'den 8'e güncellendi -->
                        <tr><td colspan="8" style="text-align: center; padding: 20px;">Aradığınız kriterlere uygun ürün bulunamadı.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

    <script>
        document.querySelectorAll('.stock-input').forEach(input => {
            input.addEventListener('change', function() {
                const productId = this.getAttribute('data-id');
                const newStock = this.value;
                const statusSpan = document.getElementById('status-' + productId);

                statusSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin" style="color: #64748b;"></i>';

                fetch('ajax_stok_guncelle.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'id=' + productId + '&stok=' + newStock
                })
                .then(response => response.text())
                .then(data => {
                    if(data.trim() === 'ok') {
                        statusSpan.innerHTML = '<i class="fa-solid fa-check" style="color: #166534;"></i>';
                        
                        if(newStock < 5) {
                            this.style.color = '#ef4444';
                        } else {
                            this.style.color = '#166534';
                        }

                        setTimeout(() => { statusSpan.innerHTML = ''; }, 2000);
                    } else {
                        statusSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ef4444;"></i>';
                        alert('Stok güncellenirken bir hata oluştu!');
                    }
                })
                .catch(error => {
                    statusSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ef4444;"></i>';
                });
            });
        });
    </script>
</body>
</html>