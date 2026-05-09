<?php
// baglan.php
$host = 'localhost';
$dbname = 'nalbur_db';
$kullanici = 'root'; // MAMP için genelde 'root' tur.
$sifre = 'root';     // MAMP için şifre genelde 'root' tur. (Eğer hata verirse burayı boş bırak '')

try {
    // Veritabanına PDO ile bağlanıyoruz ve Türkçe karakter sorunu olmaması için utf8mb4 ayarlıyoruz
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $kullanici, $sifre);
    
    // Hata modunu aktif ediyoruz (Geliştirme aşamasında hataları görmek için kritik)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Eğer bağlantı başarısız olursa sayfayı durdur ve hatayı yazdır
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>