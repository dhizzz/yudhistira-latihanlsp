<?php include '../koperasi_pegawai/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Tambah Customer</h1>
        <nav>
            <ul>
                <li><a href="../koperasi_pegawai/index.php">Home</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="sales.php">Sales</a></li>
                <li><a href="item.php">Item</a></li>
                <li><a href="petugas.php">Petugas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Form Tambah Customer</h2>
            <form action="save_customer.php" method="post">
                <label for="nama_customer">Nama Customer:</label>
                <input type="text" id="nama_customer" name="nama_customer" required>
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                <label for="telp">Telp:</label>
                <input type="text" id="telp" name="telp" required>
                <label for="fax">Fax:</label>
                <input type="text" id="fax" name="fax" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Simpan</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Koperasi Pegawai</p>
    </footer>
</body>
</html>