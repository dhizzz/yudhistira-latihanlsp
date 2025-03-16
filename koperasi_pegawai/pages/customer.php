<?php include '../koperasi_pegawai/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Customer</h1>
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
            <h2>Daftar Customer</h2>
            <a href="add_customer.php">Tambah Customer</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $pdo->query('SELECT * FROM customer');
                    while ($row = $stmt->fetch()) {
                        echo "<tr>
                                <td>{$row['id_customer']}</td>
                                <td>{$row['nama_customer']}</td>
                                <td>{$row['alamat']}</td>
                                <td>{$row['telp']}</td>
                                <td>{$row['fax']}</td>
                                <td>{$row['email']}</td>
                                <td>
                                    <a href='edit_customer.php?id={$row['id_customer']}'>Edit</a>
                                    <a href='delete_customer.php?id={$row['id_customer']}'>Hapus</a>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Koperasi Pegawai</p>
    </footer>
</body>
</html>