<?php
session_start();
// Hata ayıklama açık kalsın
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'baglan.php';

$hata = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $sifre = trim($_POST['sifre']);

    if (!empty($email) && !empty($sifre)) {
        // DİKKAT: Veritabanındaki sütun adın 'Password_hash' olduğu için sorguyu güncelledik
        $sorgu = $db->prepare("SELECT * FROM users WHERE Email = ? AND Password_hash = ? AND IsActive = 1");
        $sorgu->execute([$email, $sifre]);
        $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

        if ($kullanici) {
            // Giriş Başarılı
            $_SESSION['user_id'] = $kullanici['Id'];
            $_SESSION['user_name'] = $kullanici['FName']; // Veritabanındaki 'FName' sütununu alıyoruz
            $_SESSION['user_role'] = $kullanici['RoleId']; 
            
            header("Location: index.php");
            exit;
        } else {
            $hata = "E-posta veya şifre hatalı!";
        }
    } else {
        $hata = "Lütfen tüm alanları doldurun!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap - NalburDükkan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-box { max-width: 400px; margin: 80px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.1); border-top: 5px solid #ff6600; }
        .login-box h2 { text-align: center; color: #333; margin-bottom: 25px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
        .form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; outline: none; }
        .btn-submit { width: 100%; padding: 12px; background: #ff6600; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        .error { color: #d9534f; background: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center; }
    </style>
</head>
<body style="background: #f4f4f4;">
    <?php include 'header.php'; ?>

    <div class="login-box">
        <h2>Kullanıcı Girişi</h2>
        <?php if($hata): ?> <div class="error"><?php echo $hata; ?></div> <?php endif; ?>
        
        <form action="giris.php" method="POST">
            <div class="form-group">
                <label>E-posta</label>
                <input type="email" name="email" required placeholder="admin@nalbur.com">
            </div>
            <div class="form-group">
                <label>Şifre</label>
                <input type="password" name="sifre" required placeholder="******">
            </div>
            <button type="submit" class="btn-submit">Giriş Yap</button>
<p style="text-align: center; margin-top: 20px; font-size: 14px; color: #666;">
    Hesabınız yok mu? <a href="kayit.php" style="color: #ff6600; font-weight: bold; text-decoration: none;">Hemen Kayıt Ol</a>
</p>
        </form>
    </div>
</body>
</html>