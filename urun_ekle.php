<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    header("Location: index.php");
    exit;
}

$mesaj = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cat_id = $_POST['category_id'];
    $image = $_POST['image_path'];
    $desc = $_POST['description'];
    $sku = "SKU-" . rand(1000, 9999);

    // Teknik özellikleri textarea'dan satır satır alıyoruz
    $features = explode("\n", str_replace("\r", "", $_POST['features']));

    try {
        // 1. Ürünü ekle
        $sorgu = $db->prepare("INSERT INTO Products (CategoryId, Name, Price, Description, ImagePath, Unit, SKU) VALUES (?, ?, ?, ?, ?, 'Adet', ?)");
        $sorgu->execute([$cat_id, $name, $price, $desc, $image, $sku]);
        
        $yeniId = $db->lastInsertId();

        // 2. Teknik özellikleri ekle
        $ozellikSorgu = $db->prepare("INSERT INTO ProductFeatures (ProductId, FeatureText) VALUES (?, ?)");
        foreach ($features as $f) {
            $f = trim($f);
            if (!empty($f)) {
                $ozellikSorgu->execute([$yeniId, $f]);
            }
        }

        $mesaj = "<p style='color:green;'>Ürün başarıyla eklendi!</p>";
    } catch (PDOException $e) {
        $mesaj = "<p style='color:red;'>Hata oluştu: " . $e->getMessage() . "</p>";
    }
}

// Kategorileri çekelim (Dropdown için)
$kategoriler = $db->query("SELECT * FROM Categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Ürün Ekle | Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container { max-width: 600px; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .btn-submit { background: #28a745; color: white; border: none; padding: 12px 20px; border-radius: 5px; cursor: pointer; width: 100%; font-size: 16px; }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="form-container">
            <h2>Yeni Ürün Ekle</h2>
            <?php echo $mesaj; ?>
            <form action="urun_ekle.php" method="POST">
                <div class="form-group">
                    <label>Ürün Adı</label>
                    <input type="text" name="name" required placeholder="Örn: Bosch Darbeli Matkap">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id">
                        <?php foreach($kategoriler as $k): ?>
                            <option value="<?php echo $k['Id']; ?>"><?php echo $k['Name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fiyat (TL)</label>
                    <input type="number" step="0.01" name="price" required placeholder="1250.00">
                </div>
                <div class="form-group">
                    <label>Görsel Yolu</label>
                    <input type="text" name="image_path" required placeholder="fotolar/urun.png">
                </div>
                <div class="form-group">
                    <label>Ürün Açıklaması</label>
                    <textarea name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Teknik Özellikler (Her satıra bir özellik)</label>
                    <textarea name="features" rows="5" placeholder="Dövme Çelik&#10;Ahşap Sap&#10;300gr"></textarea>
                </div>
                <button type="submit" class="btn-submit">Ürünü Kaydet</button>
                <a href="admin_panel.php" style="display:block; text-align:center; margin-top:15px; color:#666;">Panele Geri Dön</a>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>