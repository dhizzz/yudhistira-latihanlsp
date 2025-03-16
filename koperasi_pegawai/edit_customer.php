<?php
include '../koperasi_pegawai/includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM customer WHERE id_customer = ?');
    $stmt->execute([$id]);
    $customer = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Edit Customer</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="sales.php">Sales</a></li>
                <li><a href="item.php">Item</a></li>
                <li><a href="petugas.php">Petugas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Form Edit Customer</h2>
            <form action="update_customer.php" method="post">
                <input type="hidden" name="id_customer" value="<?php echo $customer['id_customer']; ?>">
                <label for="nama_customer">Nama Customer:</label>
                <input type="text" id="nama_customer" name="nama_customer" value="<?php echo $customer['nama_customer']; ?>" required>
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $customer['alamat']; ?>" required>
                <label for="telp">Telp:</label>
                <input type="text" id="telp" name="telp" value="<?php echo $customer['telp']; ?>" required>
                <label for="fax">Fax:</label>
                <input type="text" id="fax" name="fax" value="<?php echo $customer['fax']; ?>" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $customer['email']; ?>" required>
                <button type="submit">Update</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Koperasi Pegawai</p>
    </footer>
</body>
</html>