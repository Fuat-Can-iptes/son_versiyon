<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'baglan.php';

// Güvenlik Kontrolü
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header("Location: index.php");
    exit;
}

// --- İSTATİSTİKLERİ ÇEKELİM ---
$toplamUrun = $db->query("SELECT COUNT(*) FROM products")->fetchColumn();
$toplamSiparis = $db->query("SELECT COUNT(*) FROM orders")->fetchColumn();
$toplamCiro = $db->query("SELECT SUM(TotalPrice) FROM orders")->fetchColumn() ?? 0;

// Ürünleri çekelim
$urunler = $db->query("SELECT * FROM products ORDER BY Id DESC")->fetchAll(PDO::FETCH_ASSOC);

// Son Siparişleri çekelim (Mevcut şemana göre OrderAt kullanıyoruz)
$siparisler = $db->query("SELECT o.*, CONCAT(u.FName, ' ', u.LName) as MusteriAd FROM orders o JOIN users u ON o.UserId = u.Id ORDER BY o.OrderAt DESC LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetim Paneli | NalburDükkan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .admin-main { padding: 30px 0; }
        /* İstatistik Kartları */
        .stats-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 20px; border-left: 5px solid #ff6600; }
        .stat-card i { font-size: 35px; color: #ff6600; }
        .stat-card div h3 { font-size: 14px; color: #888; margin: 0; text-transform: uppercase; }
        .stat-card div p { font-size: 24px; font-weight: 700; margin: 5px 0 0; color: #333; }
        
        .admin-card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); margin-bottom: 30px; }
        .table-custom { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table-custom th, .table-custom td { padding: 12px; border-bottom: 1px solid #eee; text-align: left; }
        
        /* DURUM ROZETLERİ (Yeni) */
        .status-badge { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .status-pending { background: #fff3cd; color: #856404; }
        .status-approved { background: #d4edda; color: #155724; }
        .status-shipped { background: #d1ecf1; color: #0c5460; }

        /* İŞLEM BUTONLARI (Yeni) */
        .btn-approve { background: #007bff; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px; font-weight: 600; }
        .btn-ship { background: #ffc107; color: #212529; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px; font-weight: 600; }
        .btn-add { background: #28a745; color:white; padding: 10px 20px; border-radius: 5px; text-decoration:none; display:inline-block; }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container admin-main">
        
        <!-- ÜST İSTATİSTİK KARTLARI -->
        <div class="stats-container">
            <div class="stat-card">
                <i class="fa-solid fa-boxes-stacked"></i>
                <div><h3>Toplam Ürün</h3><p><?php echo $toplamUrun; ?></p></div>
            </div>
            <div class="stat-card">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <div><h3>Toplam Sipariş</h3><p><?php echo $toplamSiparis; ?></p></div>
            </div>
            <div class="stat-card">
                <i class="fa-solid fa-money-bill-trend-up"></i>
                <div><h3>Toplam Ciro</h3><p><?php echo number_format($toplamCiro, 2, ',', '.'); ?> TL</p></div>
            </div>
        </div>

        <!-- SİPARİŞ YÖNETİMİ -->
        <div class="admin-card">
            <h2><i class="fa-solid fa-receipt"></i> Son Siparişler</h2>
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Müşteri</th>
                        <th>Tarih</th>
                        <th>Toplam</th>
                        <th>Durum</th>
                        <th>İşlem</th> <!-- 6. Sütun eklendi -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($siparisler as $s): ?>
                    <tr>
                        <td>#<?php echo $s['Id']; ?></td>
                        <td><?php echo $s['MusteriAd']; ?></td>
                        <td><?php echo date('d.m.Y H:i', strtotime($s['OrderAt'])); ?></td>
                        <td><?php echo number_format($s['TotalPrice'], 2, ',', '.'); ?> TL</td>
                        
                        <!-- Dinamik Durum Rozeti -->
                        <td>
                            <span class="status-badge status-<?php echo $s['Status']; ?>">
                                <?php 
                                    if($s['Status'] == 'pending') echo 'Bekliyor';
                                    elseif($s['Status'] == 'approved') echo 'Onaylandı';
                                    elseif($s['Status'] == 'shipped') echo 'Kargolandı';
                                    else echo $s['Status'];
                                ?>
                            </span>
                        </td>

                        <!-- Dinamik İşlem Butonları -->
                        <td>
                            <?php if($s['Status'] == 'pending'): ?>
                                <a href="siparis_islem.php?id=<?php echo $s['Id']; ?>&durum=approved" class="btn-approve">Onayla</a>
                            <?php elseif($s['Status'] == 'approved'): ?>
                                <a href="siparis_islem.php?id=<?php echo $s['Id']; ?>&durum=shipped" class="btn-ship">Kargoya Ver</a>
                            <?php else: ?>
                                <span style="color: #28a745;"><i class="fa-solid fa-check-double"></i> Tamamlandı</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- ÜRÜN YÖNETİMİ -->
        <div class="admin-card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                <h2><i class="fa-solid fa-screwdriver-wrench"></i> Ürün Yönetimi</h2>
                <a href="urun_ekle.php" class="btn-add">+ Yeni Ürün Ekle</a>
            </div>
            
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>Görsel</th>
                        <th>Ürün Adı</th>
                        <th>Fiyat</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($urunler as $u): ?>
                    <tr>
                        <td><img src="<?php echo $u['ImagePath']; ?>" width="40" style="border-radius:4px;"></td>
                        <td><?php echo htmlspecialchars($u['Name']); ?></td>
                        <td><?php echo number_format($u['Price'], 2, ',', '.'); ?> TL</td>
                        <td>
                            <a href="sil.php?id=<?php echo $u['Id']; ?>" style="color: #dc3545;" onclick="return confirm('Silmek istediğine emin misin?')">
                                <i class="fa-solid fa-trash"></i> Sil
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>