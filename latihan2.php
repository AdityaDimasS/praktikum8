<?php
// variabel dalam php
$txt = "Selamat Datang!";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p> Isi Variabel txt adalah : $txt</p>"; 
echo "<p> Isi Variabel x adalah : $x </p>";
echo "<p> Isi Variabel y adalah : $y </p>";
echo $x + $y; 

// PHP Konstanta
define("nama_konstanta","{AdityaDimas}");
echo "<br/>". nama_konstanta;

?>