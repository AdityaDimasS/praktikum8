<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Angka </title>
</head>
<body>
    <h1>Konversi Angka ke huruf</h1>

    <form method="post">
        <label for="angka">Masukkan Angka (1-9):</label>
        <input type="number" id="angka" name="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
    // Fungsi untuk mengkonversi angka menjadi terbilang
    function konversiTerbilang($angka) {
        switch ($angka) {
            case 1:
                return "satu";
                break;
            case 2:
                return "dua";
                break;
            case 3:
                return "tiga";
                break;
            case 4:
                return "empat";
                break;
            case 5:
                return "lima";
                break;
            case 6:
                return "enam";
                break;
            case 7:
                return "tujuh";
                break;
            case 8:
                return "delapan";
                break;
            case 9:
                return "sembilan";
                break;
            default:
                return "Angka tidak valid";
        }
    }

    // Memeriksa apakah nilai sudah di-submit melalui form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari input
        $angka = $_POST["angka"];
        // Menampilkan hasil konversi
        echo "<p>Angka: " . $angka . "</p>";
        echo "<p>Terbilang: " . konversiTerbilang($angka) . "</p>";
    }
    ?>

</body>
</html>