<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Lingkaran</title>
</head>
<body>
    <h1>Menghitung Keliling Lingkaran</h1>

    <?php
    // Deklarasi variabel
    $jari_jari = 20; // jari-jari lingkaran

    // Menghitung keliling lingkaran
    $keliling = 2 * M_PI * $jari_jari;

    // Menampilkan hasil perhitungan
    echo "<p>Jari-jari lingkaran: $jari_jari cm</p>";
    echo "<p>Keliling lingkaran: $keliling cm</p>";
    ?>
</body>
</html>