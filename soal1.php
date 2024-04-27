<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji Bersih</title>
</head>
<body>
    <h1>Perhitungan Gaji Bersih Obi</h1>

    <?php
    // Deklarasi variabel gaji pokok dan tunjangan
    $gajiPokok = 3250000;
    $tunjangan = 1200000;

    // Hitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjangan;

    // Hitung pajak penghasilan (10% dari gaji kotor)
    $pajak = 0.1 * $gajiKotor;

    // Hitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;
    ?>

    <p>Gaji pokok Obi: Rp. <?php echo number_format($gajiPokok, 0, ',', '.'); ?>,-</p>
    <p>Tunjangan jabatan: Rp. <?php echo number_format($tunjangan, 0, ',', '.'); ?>,-</p>
    <p>Gaji kotor: Rp. <?php echo number_format($gajiKotor, 0, ',', '.'); ?>,-</p>
    <p>Pajak penghasilan (10%): Rp. <?php echo number_format($pajak, 0, ',', '.'); ?>,-</p>
    <h2>Gaji bersih yang diterima Obi setiap bulannya adalah: Rp. <?php echo number_format($gajiBersih, 0, ',', '.'); ?>,-</h2>
</body>
</html>