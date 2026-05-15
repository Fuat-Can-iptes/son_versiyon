<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header("Location: index.php");
    exit;
}

// --- GÜNCELLEDİĞİMİZ KISIM: SİLME YERİNE DURUM DEĞİŞTİRME ---
if (isset($_GET['durum_id']) && isset($_GET['set'])) {
    $id = $_GET['durum_id'];
    $set = (int)$_GET['set']; // 0 = Pasif, 1 = Aktif
    try {
        // Ürünü silmiyoruz, IsActive sütununu güncelliyoruz
        $db->prepare("UPDATE products SET IsActive = ? WHERE Id = ?")->execute([$set, $id]);
        header("Location: admin_urunler.php?durum=guncellendi");
        exit;
    } catch (Exception $e) {
        $hata = "İşlem hatası: " . $e->getMessage();
    }
}

// ARAMA MANTIĞI (Senin orijinal kodun)
$arama = isset($_GET['q']) ? trim($_GET['q']) : '';
$sorgu_ek = "";
$parametreler = [];

if ($arama !== '') {
    $sorgu_ek = "WHERE p.Name LIKE ? OR p.SKU LIKE ?";
    $parametreler[] = "%$arama%";
    $parametreler[] = "%$arama%";
}

// Ürünleri Çekme (Senin orijinal LEFT JOIN yapın)
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
        .search-form { display: flex; gap: 10px; margin-bottom: 20px; }
        .search-input { padding: 10px 15px; width: 350px; border: 1px solid #cbd5e1; border-radius: 5px; outline: none; }
        .search-btn { background: #1e293b; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .clear-btn { background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; }
        
        .stock-input, .price-input { padding: 8px; border: 1px solid #cbd5e1; border-radius: 4px; font-weight: bold; text-align: center; }
        .stock-input { width: 70px; }
        .price-input { width: 100px; color: #166534; }
        
        /* DURUM ROZETLERİ */
        .status-badge { padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold; text-transform: uppercase; }
        .bg-active { background: #dcfce3; color: #166534; }
        .bg-passive { background: #fee2e2; color: #991b1b; }
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

        <?php if(isset($_GET['durum'])): ?>
            <div style="background: #dcfce3; color: #166534; padding: 10px; border-radius: 5px; margin-bottom: 15px;">Ürün durumu güncellendi!</div>
        <?php endif; ?>

        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th>Görsel</th>
                        <th>Ürün Adı</th>
                        <th>Durum</th>
                        <th>Fiyat (Düzenle)</th>
                        <th>Stok Düzenle</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($urunler as $u): ?>
                    <tr style="<?php echo $u['IsActive'] == 0 ? 'opacity: 0.6;' : ''; ?>">
                        <td><strong>#<?php echo $u['Id']; ?></strong></td>
                        <td><img src="<?php echo htmlspecialchars($u['ImagePath']); ?>" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td>
                        <td><strong><?php echo htmlspecialchars($u['Name']); ?></strong><br><small><?php echo htmlspecialchars($u['SKU']); ?></small></td>
                        
                        <td>
                            <?php if($u['IsActive'] == 1): ?>
                                <span class="status-badge bg-active">Aktif</span>
                            <?php else: ?>
                                <span class="status-badge bg-passive">Pasif</span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <input type="number" step="0.01" class="price-input" data-id="<?php echo $u['Id']; ?>" value="<?php echo $u['Price']; ?>">
                            <span id="p-status-<?php echo $u['Id']; ?>"></span>
                        </td>

                        <td>
                            <input type="number" class="stock-input" data-id="<?php echo $u['Id']; ?>" value="<?php echo $u['Stock']; ?>" style="color: <?php echo $u['Stock'] < 5 ? '#ef4444' : '#166534'; ?>;">
                            <span id="status-<?php echo $u['Id']; ?>"></span>
                        </td>

                        <td>
                            <?php if($u['IsActive'] == 1): ?>
                                <a href="admin_urunler.php?durum_id=<?php echo $u['Id']; ?>&set=0" style="color: #ef4444; text-decoration: none;" onclick="return confirm('Pasife almak istediğinize emin misiniz?');"><i class="fa-solid fa-eye-slash"></i> Pasif Yap</a>
                            <?php else: ?>
                                <a href="admin_urunler.php?durum_id=<?php echo $u['Id']; ?>&set=1" style="color: #10b981; text-decoration: none; font-weight:bold;"><i class="fa-solid fa-eye"></i> Aktif Yap</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

   <script>
        // --- STOK GÜNCELLEME (Mevcut, dokunmadık) ---
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
                        this.style.color = (newStock < 5) ? '#ef4444' : '#166534';
                        setTimeout(() => { statusSpan.innerHTML = ''; }, 2000);
                    } else {
                        statusSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ef4444;"></i>';
                    }
                })
                .catch(err => console.error(err));
            });
        });

        // --- FİYAT GÜNCELLEME (JSON Yapısına Uyumlu) ---
        document.querySelectorAll('.price-input').forEach(input => {
            input.addEventListener('change', function() {
                const productId = this.getAttribute('data-id');
                const newPrice = this.value;
                const statusSpan = document.getElementById('p-status-' + productId);
                
                statusSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin" style="color: #ff6600;"></i>';
                
                // FormData ile gönderme (JSON yanıtlayan PHP'ye en uygunu)
                const formData = new FormData();
                formData.append('id', productId);
                formData.append('fiyat', newPrice);

                fetch('ajax_fiyat_guncelle.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json()) // BURASI ÖNEMLİ: json olarak okuyoruz
                .then(data => {
                    if(data.status === 'success') {
                        statusSpan.innerHTML = '<i class="fa-solid fa-check" style="color: #166534;"></i>';
                        this.style.borderColor = "#166534"; // Başarılıysa inputun kenarını yeşil yap
                        
                        setTimeout(() => { 
                            statusSpan.innerHTML = ''; 
                            this.style.borderColor = "#cbd5e1"; // Kenarlığı eski haline getir
                        }, 2000);
                    } else {
                        statusSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ef4444;"></i>';
                        alert("Hata: " + data.message);
                    }
                })
                .catch(err => {
                    console.error(err);
                    statusSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ef4444;"></i>';
                });
            });
        });
    </script>
</body>
</html>