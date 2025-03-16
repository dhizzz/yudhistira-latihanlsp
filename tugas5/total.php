<?php
// Function untuk menghitung diskon
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = $totalBelanja * 0.10; // Diskon 10%
    } elseif ($totalBelanja >= 50000 && $totalBelanja < 100000) {
        $diskon = $totalBelanja * 0.05; // Diskon 5%
    } else {
        $diskon = 0; // Tidak ada diskon
    }

    return $diskon;
}

// Procedure untuk menghitung total yang harus dibayar
function hitungTotalBayar($totalBelanja) {
    // Memanggil function hitungDiskon untuk mendapatkan nilai diskon
    $diskon = hitungDiskon($totalBelanja);

    // Menghitung total yang harus dibayar setelah diskon
    $totalBayar = $totalBelanja - $diskon;

    // Menampilkan hasil
    echo "Total Belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . "<br>";
    echo "Diskon: Rp. " . number_format($diskon, 0, ',', '.') . "<br>";
    echo "Total yang Harus Dibayar: Rp. " . number_format($totalBayar, 0, ',', '.') . "<br>";
}

// Contoh penggunaan
$totalBelanja1 = 120000; 
$totalBelanja2 = 75000; 
$totalBelanja3 = 30000; 

echo "<h3>Contoh 1:</h3>";
hitungTotalBayar($totalBelanja1);

echo "<h3>Contoh 2:</h3>";
hitungTotalBayar($totalBelanja2);

echo "<h3>Contoh 3:</h3>";
hitungTotalBayar($totalBelanja3);
?>