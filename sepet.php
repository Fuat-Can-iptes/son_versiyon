<?php
session_start();
include 'urunler.php'; // Ürün havuzuna erişim

// 1. SEPETİ BOŞALTMA MANTIĞI (Aynı sayfa içinde çözüyoruz)
if (isset($_GET['islem']) && $_GET['islem'] == 'sepeti_bosalt') {
    unset($_SESSION['sepet']);
    header("Location: sepet.php"); // Sayfayı yenileyerek temiz halini gösterir
    exit;
}

// 2. SEPETE ÜRÜN EKLEME MANTIĞI (Eğer başka sayfadan POST gelirse)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['urun_id'])) {
    $id = $_POST['urun_id'];
    if (!isset($_SESSION['sepet'])) { $_SESSION['sepet'] = []; }
    
    if (isset($_SESSION['sepet'][$id])) {
        $_SESSION['sepet'][$id]++;
    } else {
        $_SESSION['sepet'][$id] = 1;
    }
}

// 3. FİYAT HESAPLAMA İÇİN HAVUZU BİRLEŞTİR
$tumUrunHavuzu = array_merge($indirimliUrunler, $cokSatanlar, $kategoriUrunleri);
$genelToplam = 0;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sepetim - NalburDükkan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container">
        <div style="background: white; padding: 30px; border-radius: 10px; margin-top: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h2><i class="fa-solid fa-cart-shopping"></i> Alışveriş Sepetiniz</h2>
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

            <?php if (!empty($_SESSION['sepet'])): ?>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr style="text-align: left; background: #f8f9fa;">
                            <th style="padding: 12px;">Ürün</th>
                            <th style="padding: 12px;">Adet</th>
                            <th style="padding: 12px;">Birim Fiyat</th>
                            <th style="padding: 12px;">Toplam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($_SESSION['sepet'] as $id => $adet): 
                            // Ürün detayını bulalım
                            $urunDetay = null;
                            foreach ($tumUrunHavuzu as $u) {
                                if ($u['id'] == $id) { $urunDetay = $u; break; }
                            }

                            if ($urunDetay):
                                $araToplam = $urunDetay['fiyat'] * $adet;
                                $genelToplam += $araToplam;
                        ?>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 12px;"><?php echo $urunDetay['baslik']; ?></td>
                                <td style="padding: 12px;"><?php echo $adet; ?> Adet</td>
                                <td style="padding: 12px;"><?php echo number_format($urunDetay['fiyat'], 2); ?> TL</td>
                                <td style="padding: 12px;"><strong><?php echo number_format($araToplam, 2); ?> TL</strong></td>
                            </tr>
                        <?php endif; endforeach; ?>
                    </tbody>
                </table>

                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff8f5; padding: 20px; border-radius: 8px;">
                    <h3 style="margin: 0;">Genel Toplam: <span style="color: #ff6600; font-size: 24px;"><?php echo number_format($genelToplam, 2); ?> TL</span></h3>
                    <div>
                        <a href="index.php" style="text-decoration: none; color: #333; padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">Alışverişe Devam Et</a>
                        <a href="sepet.php?islem=sepeti_bosalt" style="text-decoration: none; color: white; background: #dc3545; padding: 10px 20px; border-radius: 5px;">Sepeti Boşalt</a>
                    </div>
                </div>

            <?php else: ?>
                <div style="text-align: center; padding: 40px;">
                    <p style="font-size: 18px; color: #666;">Sepetinizde ürün bulunmamaktadır.</p>
                    <a href="index.php" style="color: #ff6600; text-decoration: underline;">Ürünleri incelemek için tıklayın</a>
                </div>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>