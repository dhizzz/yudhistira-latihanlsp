<?php
include '../koperasi_pegawai/includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM customer WHERE id_customer = ?');
    $stmt->execute([$id]);

    header('Location: customer.php');
    exit;
}
?>