<?php
include '../koperasi_pegawai/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_customer = $_POST['id_customer'];
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('UPDATE customer SET nama_customer = ?, alamat = ?, telp = ?, fax = ?, email = ? WHERE id_customer = ?');
    $stmt->execute([$nama_customer, $alamat, $telp, $fax, $email, $id_customer]);

    header('Location: customer.php');
    exit;
}
?>