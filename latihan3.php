<?php

$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan".$x + $y."<br>"; 
echo "Pengurangan".$x - $y."<br>" ;
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus".$x % $y."<br>";
echo "Exponensial".$x  ** $y."<br>";

//Assignment Operators
$x += 2; // $x = $x + 2
$y *=2; // $y = $y * 2
echo "Penambahan x".$x."<br>";
echo "Perkalian y".$y."<br>";
echo("<br>");

//Increment/Decrement Operators
echo "Isi ++x = ".++$x."<br> ";
echo "Isi x++ = ".$x++."<br> ";
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");

//Conditional assignment operators
$user = "AdityaDimas";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status."<br>";
// Variabel $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red" ;

?>