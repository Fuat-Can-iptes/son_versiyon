<?php
session_start();
include 'baglan.php';

// Güvenlik: Giriş yapmamış veya sepeti boş olanı geri gönder
if (!isset($_SESSION['user_id']) || empty($_SESSION['sepet'])) {
    header("Location: index.php");
    exit;
}

$userId = $_SESSION['user_id'];
$totalPrice = 0;

try {
    $db->beginTransaction(); // Veri bütünlüğü için Transaction başlatıyoruz

    // 1. Toplam Fiyat Hesaplama
    foreach($_SESSION['sepet'] as $id => $adet) {
        $st = $db->prepare("SELECT Price FROM products WHERE Id = ?");
        $st->execute([$id]);
        $u = $st->fetch();
        $totalPrice += ($u['Price'] * $adet);
    }

    // 2. 'orders' Tablosuna Ekleme (Web üzerinden, bekleyen sipariş)
    $stmt = $db->prepare("INSERT INTO orders (UserId, TotalPrice, Channel, Status) VALUES (?, ?, 'Web Site', 'pending')");
    $stmt->execute([$userId, $totalPrice]);
    $orderId = $db->lastInsertId();

    // 3. 'orderdetails' Tablosuna Ürünleri Tek Tek Ekleme
    foreach($_SESSION['sepet'] as $id => $adet) {
        $st = $db->prepare("SELECT Price FROM products WHERE Id = ?");
        $st->execute([$id]);
        $u = $st->fetch();

        $detay = $db->prepare("INSERT INTO orderdetails (OrderId, ProductId, Quantity, UnitPrice) VALUES (?, ?, ?, ?)");
        $detay->execute([$orderId, $id, $adet, $u['Price']]);
    }

    $db->commit(); // Her şey yolundaysa kaydet
    unset($_SESSION['sepet']); // Sepeti temizle
    header("Location: profil.php?durum=basarili"); 

} catch (Exception $e) {
    $db->rollBack(); // Hata varsa işlemleri geri al
    echo "Hata oluştu: " . $e->getMessage();
}