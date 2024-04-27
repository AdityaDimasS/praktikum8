<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Hari</title>
</head>
<body>
    <h1>Daftar Nama Hari</h1>

    <?php
    // Mendefinisikan array yang berisi nama-nama hari
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Menampilkan nama-nama hari dengan menggunakan variabel
    echo "<p>Hari ini adalah " . $hari[0] . "</p>";
    echo "<p>Besok adalah " . $hari[1] . "</p>";
    echo "<p>Lusa adalah " . $hari[2] . "</p>";
    echo "<p>Setelah lusa adalah " . $hari[3] . "</p>";
    echo "<p>Dan seterusnya hingga Sabtu: " . $hari[4] . ", " . $hari[5] . ", " . $hari[6] . "</p>";
    ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>