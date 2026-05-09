<?php
session_start();
include 'baglan.php'; // Veritabanı bağlantımızı çağırıyoruz

// 1. URL'den ID'yi güvenli bir şekilde yakalıyoruz
$urunID = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 2. Veritabanından bu ID'li ana ürünü buluyoruz
$sorgu = $db->prepare("SELECT * FROM Products WHERE Id = ? AND IsActive = 1");
$sorgu->execute([$urunID]);
$urun = $sorgu->fetch(PDO::FETCH_ASSOC);

// Ürün bulunamazsa ana sayfaya gönder
if (!$urun) { 
    header("Location: index.php"); 
    exit; 
}

// 3. Veritabanından bu ürüne ait teknik özellikleri çekiyoruz (ProductFeatures tablosu)
$ozellikSorgu = $db->prepare("SELECT FeatureText FROM ProductFeatures WHERE ProductId = ?");
$ozellikSorgu->execute([$urunID]);
$ozellikler = $ozellikSorgu->fetchAll(PDO::FETCH_COLUMN); // Sadece metinleri dizi olarak alır
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $urun['Name']; ?> - NalburDükkan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container product-detail-wrapper" style="display: flex; gap: 50px; margin-top: 50px; background: white; padding: 30px; border-radius: 15px;">
        
        <div class="detail-left" style="flex: 1;">
            <img src="<?php echo $urun['ImagePath']; ?>" style="width: 100%; border-radius: 10px;" alt="<?php echo $urun['Name']; ?>">
        </div>
        
        <div class="detail-right" style="flex: 1;">
            <h1 style="color: #333;"><?php echo $urun['Name']; ?></h1>
            <p style="color: #ff6600; font-size: 32px; font-weight: bold; margin: 20px 0;">
                <?php echo number_format($urun['Price'], 2, ',', '.'); ?> TL
            </p>
            
            <div style="background: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                <h4 style="margin-bottom: 10px;">Ürün Açıklaması</h4>
                <p style="line-height: 1.6; color: #666;">
                    <?php echo !empty($urun['Description']) ? $urun['Description'] : 'Bu ürün için henüz bir açıklama girilmemiştir.'; ?>
                </p>
            </div>

            <div class="product-specs-container" style="margin-top: 20px;">
                <h4 style="margin-bottom: 15px;">Teknik Özellikler</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <?php 
                    // Özellikler veritabanından çekildi ve döngüye sokuluyor
                    if (!empty($ozellikler)): 
                        foreach ($ozellikler as $ozellik): 
                    ?>
                        <div class="spec-box" style="
                            background: #fff5f0; 
                            border: 1.5px solid #ff6600; 
                            padding: 10px 18px; 
                            border-radius: 8px; 
                            font-size: 14px; 
                            color: #222; 
                            font-weight: 600; 
                            display: flex;
                            align-items: center;
                            gap: 8px;
                            box-shadow: 0 2px 5px rgba(255, 102, 0, 0.1); 
                        ">
                            <i class="fa-solid fa-square-check" style="color: #ff6600; font-size: 14px;"></i>
                            <?php echo $ozellik; ?>
                        </div>
                    <?php 
                        endforeach; 
                    else:
                        echo "<p style='font-size: 13px; color: #999;'>Bu ürün için teknik özellik belirtilmemiştir.</p>";
                    endif; 
                    ?>
                </div>
            </div>

            <form action="sepet.php" method="POST">
                <input type="hidden" name="urun_id" value="<?php echo $urun['Id']; ?>">
                <button type="submit" style="background: #ff6600; color: white; border: none; padding: 15px 40px; border-radius: 5px; cursor: pointer; font-size: 18px; margin-top: 30px;">
                    Sepete Ekle
                </button>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>