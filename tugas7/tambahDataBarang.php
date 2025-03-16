<?php
// Koneksi ke database
$servername = "127.0.0.1";
$username = "root"; 
$password = ""; 
$dbname = "datalsp";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses form jika data dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    // Query untuk menambahkan data
    $sql = "INSERT INTO printer (name_merek, warma, jumlah) VALUES ('$nama_merek', '$warna', $jumlah)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="">
            <label for="nama_merek">Nama Merek:</label>
            <input type="text" id="nama_merek" name="nama_merek" required>

            <label for="warna">Warna:</label>
            <input type="text" id="warna" name="warna" required>

            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" required>

            <input type="submit" value="Tambah Barang">
        </form>
    </div>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
