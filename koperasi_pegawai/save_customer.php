<?php
include '../koperasi_pegawai/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('INSERT INTO customer (nama_customer, alamat, telp, fax, email) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$nama_customer, $alamat, $telp, $fax, $email]);

    header('Location: customer.php');
    exit;
}
?>