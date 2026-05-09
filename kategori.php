<?php
session_start();
include 'baglan.php'; 

// 1. DÜZELTME: 'kat' parametresini string olarak alalım (Slug için metin lazım)
$secilenKat = isset($_GET['kat']) ? $_GET['kat'] : '';

// 1. KATEGORİ HARİTASI
$anaKategoriler = [
    "el-aletleri"        => ["cekic-balyoz", "tornavida", "pense", "olcum"],
    "elektrikli-aletler" => ["matkap", "taslama", "kaynak", "testere"],
    "bahce-tarim"        => ["sulama", "kesme", "cim", "ilaclama"],
    "hirdavat"           => ["vida", "kilit", "mentese", "tesisat"],
    "boya-yapi"          => ["boya", "dis-cephe", "firca", "yapistirici"],
    "is-guvenligi"       => ["baret", "eldiven", "ayakkabi", "maske", "gozluk"]
];

// 2. DÜZELTME: Alt kategori mi yoksa ana kategori mi kontrolü
// $secilenKatId yerine doğru değişken adını ($secilenKat) kullanıyoruz
if (array_key_exists($secilenKat, $anaKategoriler)) {
    $sluglar = $anaKategoriler[$secilenKat];
} else {
    // Eğer ana kategori değilse, tekil slug olarak diziye ekle
    $sluglar = [$secilenKat];
}

// SQL için soru işaretleri oluşturma
$soruIsaretleri = str_repeat('?,', count($sluglar) - 1) . '?';

// 2. DİNAMİK FİLTRELEME MANTIĞI
$params = $sluglar; 
$ek_sorgu = "";

// Filtreleri kontrol et (Buralar senin kodunla aynı, sadece değişken adından emin olduk)
if (isset($_GET['f']) && $_GET['f'] == 'indirim') {
    $ek_sorgu .= " AND p.OldPrice > p.Price";
}
if (isset($_GET['s']) && $_GET['s'] == 'stok') {
    $ek_sorgu .= " AND p.StockQuantity > 0";
}

// Fiyat Aralığı Filtresi
if (isset($_GET['p'])) {
    if ($_GET['p'] == '0-1000') {
        $ek_sorgu .= " AND p.Price < 1000";
    } elseif ($_GET['p'] == '1000-1500') {
        $ek_sorgu .= " AND p.Price BETWEEN 1000 AND 1500";
    } elseif ($_GET['p'] == '1500plus') {
        $ek_sorgu .= " AND p.Price > 1500";
    }
}

// 3. SQL SORGUSU BİRLEŞTİRME
$sorguMetni = "
    SELECT p.* FROM Products p 
    JOIN Categories c ON p.CategoryId = c.Id 
    WHERE c.Slug IN ($soruIsaretleri) AND p.IsActive = 1 $ek_sorgu
    ORDER BY p.Id DESC
";

$sorgu = $db->prepare($sorguMetni);
$sorgu->execute($params);
$filtrelenmisUrunler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NalburDükkan - <?php echo ucfirst(str_replace('-', ' ', $secilenKat)); ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main class="container">
    <div class="category-header">
        <h2 class="section-title"><?php echo strtoupper(str_replace('-', ' ', $secilenKat)); ?> REYONU</h2>
        <hr class="title-divider">
    </div>

    <div class="content-wrapper">
        
        <aside class="filter-sidebar">
            <form action="kategori.php" method="GET">
                <input type="hidden" name="kat" value="<?php echo htmlspecialchars($secilenKat); ?>">
                
                <h4><i class="fa-solid fa-filter"></i> Filtrele</h4>
                
                <div class="filter-group">
                    <h5>Durum</h5>
                    <label><input type="checkbox" name="f" value="indirim" <?php echo (isset($_GET['f']) && $_GET['f'] == 'indirim') ? 'checked' : ''; ?>> İndirimli Ürünler</label>
                    <label><input type="checkbox" name="s" value="stok" <?php echo (isset($_GET['s']) && $_GET['s'] == 'stok') ? 'checked' : ''; ?>> Stokta Olanlar</label>
                </div>

                <div class="filter-group">
                    <h5>Fiyat Aralığı</h5>
                    <label><input type="radio" name="p" value="0-1000" <?php echo (isset($_GET['p']) && $_GET['p'] == '0-1000') ? 'checked' : ''; ?>> 1000 TL Altı</label>
                    <label><input type="radio" name="p" value="1000-1500" <?php echo (isset($_GET['p']) && $_GET['p'] == '1000-1500') ? 'checked' : ''; ?>> 1000 - 1500 TL</label>
                    <label><input type="radio" name="p" value="1500plus" <?php echo (isset($_GET['p']) && $_GET['p'] == '1500plus') ? 'checked' : ''; ?>> 1500 TL Üstü</label>
                </div>

                <button type="submit" class="filter-btn">Sonuçları Uygula</button>
                <a href="kategori.php?kat=<?php echo $secilenKat; ?>" class="clear-filters">Filtreleri Temizle</a>
            </form>
        </aside>

        <div class="product-grid">
            <?php if(empty($filtrelenmisUrunler)): ?>
                <div class="no-products">
                    <p>Bu kriterlere uygun ürün bulunamadı.</p>
                </div>
            <?php else: ?>
                <?php foreach($filtrelenmisUrunler as $urun): ?>
                    <div class="product-card">
                        <a href="favori_islem.php?id=<?php echo $urun['Id']; ?>" class="fav-btn">
                            <i class="fa-regular fa-heart"></i>
                        </a>

                        <a href="urun-detay.php?id=<?php echo $urun['Id']; ?>">
                            <div class="card-image">
                                <img src="<?php echo $urun['ImagePath']; ?>" alt="<?php echo htmlspecialchars($urun['Name']); ?>">
                            </div>
                        </a>

                        <div class="card-details">
                            <a href="urun-detay.php?id=<?php echo $urun['Id']; ?>" style="text-decoration: none; color: inherit;">
                                <h3 class="product-title"><?php echo htmlspecialchars($urun['Name']); ?></h3>
                            </a>
                            
                            <div class="price-container">
                                <?php if(!empty($urun['OldPrice']) && $urun['OldPrice'] > $urun['Price']): ?>
                                    <span class="old-price"><?php echo number_format($urun['OldPrice'], 2, ',', '.'); ?> TL</span>
                                <?php endif; ?>
                                <span class="new-price"><?php echo number_format($urun['Price'], 2, ',', '.'); ?> TL</span>
                            </div>

                            <form action="sepet.php" method="POST">
                                <input type="hidden" name="urun_id" value="<?php echo $urun['Id']; ?>">
                                <input type="hidden" name="islem" value="ekle">
                                <button type="submit" class="add-to-cart-btn">Sepete Ekle</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div> </div> </main>
    <?php include 'footer.php'; ?>

</body>
</html>