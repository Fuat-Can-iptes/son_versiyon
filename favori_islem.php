<?php
session_start();
include 'baglan.php';

// Güvenlik: Giriş kontrolü
if (!isset($_SESSION['user_id'])) {
    echo "unauthorized"; // JavaScript bu mesajı alınca giriş sayfasına yönlendirecek
    exit;
}

if (isset($_GET['id'])) {
    $u_id = $_SESSION['user_id'];
    $p_id = intval($_GET['id']);

    $kontrol = $db->prepare("SELECT * FROM Favorites WHERE UserId = ? AND ProductId = ?");
    $kontrol->execute([$u_id, $p_id]);

    if ($kontrol->rowCount() > 0) {
        // Zaten varsa çıkar
        $islem = $db->prepare("DELETE FROM Favorites WHERE UserId = ? AND ProductId = ?");
        $islem->execute([$u_id, $p_id]);
        echo "removed"; 
    } else {
        // Yoksa ekle
        $islem = $db->prepare("INSERT INTO Favorites (UserId, ProductId) VALUES (?, ?)");
        $islem->execute([$u_id, $p_id]);
        echo "added";
    }
}
exit;