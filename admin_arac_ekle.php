<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 1) { header("Location: index.php"); exit; }

$mesaj = "";
// Firmaları çekelim (Dropdown için)
$firmalar = $db->query("SELECT Id, Name FROM shippers ORDER BY Name ASC")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plaka = trim($_POST['plaka']);
    $marka = trim($_POST['marka']);
    $model = trim($_POST['model']);
    $firmaId = $_POST['firma_id'];
    $tip = $_POST['tip']; // K veya M
    $kapasite = $_POST['kapasite']; // Tonaj veya Hacim değeri

    if (!empty($plaka) && !empty($firmaId) && !empty($tip) && !empty($kapasite)) {
        try {
            // Transaction Başlat: İşlem yarıda kalırsa hiçbirini kaydetme (Veri Bütünlüğü)
            $db->beginTransaction();

            // 1. Adım: Ana tabloya (vehicles) ekle
            $kaydet = $db->prepare("INSERT INTO vehicles (PlateNumber, Brand, Model, ShipperId, Vehicle_Type) VALUES (?, ?, ?, ?, ?)");
            $kaydet->execute([$plaka, $marka, $model, $firmaId, $tip]);
            
            // Eklenen aracın ID'sini al
            $yeniAracId = $db->lastInsertId();

            // 2. Adım: Alttip tablolarına (trucks veya motorcycles) ekle
            if ($tip == 'K') {
                $altKaydet = $db->prepare("INSERT INTO trucks (VehicleId, MaxWeight) VALUES (?, ?)");
                $altKaydet->execute([$yeniAracId, $kapasite]);
            } elseif ($tip == 'M') {
                $altKaydet = $db->prepare("INSERT INTO motorcycles (VehicleId, BoxVolume) VALUES (?, ?)");
                $altKaydet->execute([$yeniAracId, $kapasite]);
            }

            // İşlemleri onayla
            $db->commit();
            $mesaj = "<div style='background:#dcfce3; color:#166534; padding:15px; border-radius:8px; margin-bottom:20px;'>Araç ve özellikleri başarıyla kaydedildi!</div>";
            header("refresh:2; url=admin_araclar.php");
        } catch (PDOException $e) {
            // Hata varsa geri al
            $db->rollBack();
            $mesaj = "<div style='background:#fee2e2; color:#991b1b; padding:15px; border-radius:8px; margin-bottom:20px;'>Hata: " . $e->getMessage() . "</div>";
        }
    } else {
        $mesaj = "<div style='background:#fee2e2; color:#991b1b; padding:15px; border-radius:8px; margin-bottom:20px;'>Lütfen tüm zorunlu alanları doldurun.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Araç Ekle - NalburDükkan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .admin-container { margin-left: 260px; padding: 40px; background: #f8fafc; min-height: 100vh; }
        .form-card { background: white; padding: 30px; border-radius: 12px; max-width: 600px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #475569; }
        .form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; box-sizing: border-box; }
        .btn-submit { background: #ff6600; color: white; border: none; padding: 12px 25px; border-radius: 8px; cursor: pointer; font-weight: bold; width: 100%; font-size: 16px; }
    </style>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>
    <main class="admin-container">
        <h2><i class="fa-solid fa-plus-circle" style="color:#ff6600;"></i> Yeni Araç Kaydı</h2>
        <p style="color: #64748b; margin-bottom: 20px;">Filoya yeni bir kamyon veya motosiklet ekleyin.</p>
        
        <?php echo $mesaj; ?>
        
        <div class="form-card">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Araç Tipi (Zorunlu)</label>
                    <select name="tip" id="aracTipi" required onchange="kapasiteAyarla()">
                        <option value="">Seçiniz...</option>
                        <option value="K">Kamyon</option>
                        <option value="M">Motosiklet</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Plaka Numarası (Zorunlu)</label>
                    <input type="text" name="plaka" placeholder="Örn: 78 AB 123" required>
                </div>
                
                <div class="form-group">
                    <label>Marka</label>
                    <input type="text" name="marka" placeholder="Örn: Ford">
                </div>
                
                <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" placeholder="Örn: Transit">
                </div>
                
                <div class="form-group">
                    <label>Bağlı Kargo Firması (Zorunlu)</label>
                    <select name="firma_id" required>
                        <option value="">Firma Seçin...</option>
                        <?php foreach($firmalar as $f): ?>
                            <option value="<?php echo $f['Id']; ?>"><?php echo htmlspecialchars($f['Name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group" id="kapasiteKutusu" style="display: none; background: #f8fafc; padding: 15px; border-radius: 8px; border: 1px dashed #cbd5e1;">
                    <label id="kapasiteLabel">Kapasite</label>
                    <input type="number" step="0.01" name="kapasite" id="kapasiteInput" placeholder="" required disabled>
                </div>

                <button type="submit" class="btn-submit">Aracı Sisteme Kaydet</button>
            </form>
        </div>
    </main>

    <script>
        function kapasiteAyarla() {
            var tip = document.getElementById("aracTipi").value;
            var kutu = document.getElementById("kapasiteKutusu");
            var label = document.getElementById("kapasiteLabel");
            var input = document.getElementById("kapasiteInput");

            if (tip === "K") {
                kutu.style.display = "block";
                label.innerHTML = "Maksimum Tonaj (Ton)";
                input.placeholder = "Örn: 3.5";
                input.disabled = false;
            } else if (tip === "M") {
                kutu.style.display = "block";
                label.innerHTML = "Sepet Hacmi (Litre)";
                input.placeholder = "Örn: 45";
                input.disabled = false;
            } else {
                kutu.style.display = "none";
                input.disabled = true;
                input.value = "";
            }
        }
    </script>
</body>
</html>