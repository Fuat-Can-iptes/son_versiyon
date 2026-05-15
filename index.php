<?php
session_start();
include 'baglan.php'; 

// 1. "İndirimli Ürünler" Sorgusu
$sorguIndirimli = $db->query("SELECT * FROM Products WHERE IsActive = 1 ORDER BY Price ASC LIMIT 4");
$indirimliUrunler = $sorguIndirimli->fetchAll(PDO::FETCH_ASSOC);

// 2. "En Çok Tercih Edilenler" Sorgusu
$sorguCokSatanlar = $db->query("SELECT * FROM Products WHERE IsActive = 1 ORDER BY Id DESC LIMIT 4");
$cokSatanlar = $sorguCokSatanlar->fetchAll(PDO::FETCH_ASSOC);

include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NalburDükkan | Profesyonel El Aletleri</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .out-of-stock-badge {
            position: absolute; top: 10px; left: 10px; background-color: #d93025;
            color: white; padding: 4px 10px; font-size: 11px; font-weight: bold;
            border-radius: 3px; z-index: 5; text-transform: uppercase;
        }
        .img-grayscale { filter: grayscale(100%); opacity: 0.6; }
        .btn-out-of-stock { background-color: #cbd5e1 !important; cursor: not-allowed !important; color: #64748b !important; }

        /* AJAX FAVORİ BUTONU STİLİ */
        .fav-btn {
            position: absolute; top: 15px; right: 15px; z-index: 99; /* Resim linkinin üstünde kalması için */
            background: white; width: 35px; height: 35px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer; transition: 0.3s;
        }
        .fav-btn:hover { transform: scale(1.1); }
    </style>
</head>
<body>

    <div class="container"> 
        <div class="hero-slider-container">
            <div class="slider-wrapper">
                <div class="slide"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200&h=300&auto=format&fit=crop"></div>
                <div class="slide"><img src="https://images.unsplash.com/photo-1581166397057-235af2b3c6dd?q=80&w=1200&h=300&auto=format&fit=crop"></div>
                <div class="slide"><img src="https://images.unsplash.com/photo-1530124566582-a618bc2615dc?q=80&w=1200&h=300&auto=format&fit=crop"></div>
                <div class="slide"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=1200&h=300&auto=format&fit=crop"></div>
            </div>
            <button type="button" class="slider-btn prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button type="button" class="slider-btn next-btn"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="slider-dots"><span class="dot active"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
        </div>
    </div>
   
    <main class="container home-content">
        
        <section class="home-section">
            <h2 class="section-title">İndirimli Ürünler</h2>
            <div class="product-grid">
                <?php foreach($indirimliUrunler as $urun): 
                    // FAVORİ KONTROLÜ
                    $is_fav = false;
                    if (isset($_SESSION['user_id'])) {
                        $f_check = $db->prepare("SELECT 1 FROM Favorites WHERE UserId = ? AND ProductId = ?");
                        $f_check->execute([$_SESSION['user_id'], $urun['Id']]);
                        if ($f_check->rowCount() > 0) $is_fav = true;
                    }
                ?>
                    <div class="product-card" style="position: relative;">
                        <a href="javascript:void(0);" class="fav-btn ajax-fav-btn" data-id="<?php echo $urun['Id']; ?>">
                            <i class="fa-<?php echo $is_fav ? 'solid' : 'regular'; ?> fa-heart" 
                               style="color: <?php echo $is_fav ? '#ff6600' : '#cbd5e1'; ?>;"></i>
                        </a>

                        <div class="badge" style="background-color: #ff6600;">Fırsat</div>
                        
                        <a href="urun-detay.php?id=<?php echo $urun['Id']; ?>">
                            <div class="card-image">
                                <?php if ($urun['Stock'] <= 0): ?>
                                    <div class="out-of-stock-badge">Tükendi</div>
                                <?php endif; ?>
                                <img src="<?php echo $urun['ImagePath']; ?>" alt="Ürün" class="<?php echo ($urun['Stock'] <= 0) ? 'img-grayscale' : ''; ?>">
                            </div>
                        </a>

                        <div class="card-details">
                            <span class="cargo-badge">Hızlı Kargo</span>
                            <h3 class="product-title"><?php echo htmlspecialchars($urun['Name']); ?></h3>
                            <div class="price-container">
                                <span class="new-price"><?php echo number_format($urun['Price'], 2, ',', '.'); ?> TL</span>
                            </div>
                            <form action="sepet.php" method="POST">
                                <input type="hidden" name="urun_id" value="<?php echo $urun['Id']; ?>">
                                <button type="submit" class="add-to-cart-btn" <?php echo ($urun['Stock'] <= 0) ? 'disabled' : ''; ?>>
                                    <?php echo ($urun['Stock'] <= 0) ? 'Stokta Yok' : 'Sepete Ekle'; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="home-section" style="margin-top: 50px;">
            <h2 class="section-title">En Çok Tercih Edilenler</h2>
            <div class="product-grid">
                <?php foreach($cokSatanlar as $urun): 
                    // FAVORİ KONTROLÜ
                    $is_fav = false;
                    if (isset($_SESSION['user_id'])) {
                        $f_check = $db->prepare("SELECT 1 FROM Favorites WHERE UserId = ? AND ProductId = ?");
                        $f_check->execute([$_SESSION['user_id'], $urun['Id']]);
                        if ($f_check->rowCount() > 0) $is_fav = true;
                    }
                ?>
                <div class="product-card" style="position: relative;">
                    <div class="badge" style="background-color: #28a745;">Çok Satan</div>
                    
                    <a href="javascript:void(0);" class="fav-btn ajax-fav-btn" data-id="<?php echo $urun['Id']; ?>">
                        <i class="fa-<?php echo $is_fav ? 'solid' : 'regular'; ?> fa-heart" 
                           style="color: <?php echo $is_fav ? '#ff6600' : '#cbd5e1'; ?>;"></i>
                    </a>
                    
                    <a href="urun-detay.php?id=<?php echo $urun['Id']; ?>">
                        <div class="card-image">
                            <?php if ($urun['Stock'] <= 0): ?>
                                <div class="out-of-stock-badge">Tükendi</div>
                            <?php endif; ?>
                            <img src="<?php echo $urun['ImagePath']; ?>" alt="Ürün" class="<?php echo ($urun['Stock'] <= 0) ? 'img-grayscale' : ''; ?>">
                        </div>
                    </a>

                    <div class="card-details">
                        <span class="cargo-badge">Ücretsiz Kargo</span>
                        <h3 class="product-title"><?php echo htmlspecialchars($urun['Name']); ?></h3>
                        <div class="price-container">
                            <span class="new-price"><?php echo number_format($urun['Price'], 2, ',', '.'); ?> TL</span>
                        </div>
                        <form action="sepet.php" method="POST">
                            <input type="hidden" name="urun_id" value="<?php echo $urun['Id']; ?>">
                            <button type="submit" class="add-to-cart-btn" <?php echo ($urun['Stock'] <= 0) ? 'disabled' : ''; ?>>
                                <?php echo ($urun['Stock'] <= 0) ? 'Stokta Yok' : 'Sepete Ekle'; ?>
                            </button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <script>
        // --- AJAX FAVORİ İŞLEMİ ---
        document.querySelectorAll('.ajax-fav-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const productId = this.getAttribute('data-id');
                const heartIcon = this.querySelector('i');
                
                fetch(`favori_islem.php?id=${productId}`)
                    .then(response => response.text())
                    .then(data => {
                        const status = data.trim();
                        if (status === 'added') {
                            heartIcon.classList.replace('fa-regular', 'fa-solid');
                            heartIcon.style.color = '#ff6600';
                        } else if (status === 'removed') {
                            heartIcon.classList.replace('fa-solid', 'fa-regular');
                            heartIcon.style.color = '#cbd5e1';
                        } else if (status === 'unauthorized') {
                            alert("Önce giriş yapmalısınız!");
                            window.location.href = "giris.php";
                        }
                    });
            });
        });

        // --- SLIDER SCRIPTS ---
        const wrapper = document.querySelector('.slider-wrapper');
        const dots = document.querySelectorAll('.dot');
        let slideIndex = 0;
        const totalSlides = 4;
        function showSlide(index) {
            if (index >= totalSlides) slideIndex = 0; 
            if (index < 0) slideIndex = totalSlides - 1; 
            wrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[slideIndex].classList.add('active');
        }
        document.querySelector('.next-btn').addEventListener('click', () => { slideIndex++; showSlide(slideIndex); });
        document.querySelector('.prev-btn').addEventListener('click', () => { slideIndex--; showSlide(slideIndex); });
        setInterval(() => { slideIndex++; showSlide(slideIndex); }, 5000);
    </script>

<?php include 'footer.php'; ?>
</body>
</html>