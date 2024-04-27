<?php
// Jumlah uang yang akan diambil oleh Ani
$jumlah_uang = 1387500;

// Array untuk menyimpan denominasi uang
$denominasi_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Array untuk menyimpan banyaknya masing-masing pecahan uang
$banyaknya_uang = array();

// Menghitung banyaknya masing-masing pecahan uang
foreach ($denominasi_uang as $denominasi) {
    // Menghitung jumlah pecahan uang yang diperoleh
    $jumlah_denominasi = intval($jumlah_uang / $denominasi);
    
    // Menyimpan jumlah pecahan uang ke dalam array
    $banyaknya_uang[$denominasi] = $jumlah_denominasi;
    
    // Mengurangkan sisa uang yang belum dihitung
    $jumlah_uang = $jumlah_uang - ($jumlah_denominasi * $denominasi);
}

// Menampilkan hasil
echo "Ani akan mendapatkan uang dengan pecahan sebagai berikut: <br>";
foreach ($banyaknya_uang as $denominasi => $jumlah) {
    echo "Rp. " . number_format($denominasi, 0, ',', '.') . " : " . $jumlah . " lembar <br>";
}
?>
