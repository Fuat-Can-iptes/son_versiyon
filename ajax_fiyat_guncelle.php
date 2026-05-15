<?php
session_start();
include 'baglan.php';

// Güvenlik kontrolü
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 1) {
    echo json_encode(['status' => 'unauthorized', 'message' => 'Yetkisiz erişim!']);
    exit;
}

if (isset($_POST['id']) && isset($_POST['fiyat'])) {
    $id = $_POST['id'];
    $fiyat = $_POST['fiyat'];

    try {
        $sorgu = $db->prepare("UPDATE products SET Price = :fiyat WHERE Id = :id");
        $sonuc = $sorgu->execute([
            ':fiyat' => $fiyat,
            ':id' => $id
        ]);

        if($sonuc) {
            echo json_encode(['status' => 'success', 'message' => 'Fiyat güncellendi!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Güncelleme başarısız.']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
?>