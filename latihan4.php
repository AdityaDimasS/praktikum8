<?php
/* Operator logika yang bisa digunakan
* == Sama Dengan        $x == $y
* === Identical         $x === $y
* != Tidak Sama dengan  $x != $y
* <>  Tidak Sama dengan $x <> $y
* !== Not identical     $x !== $y
* > Lebih Besar dari    $x > $y
* < Kurang dari         $x < $y
* >= Lebih besar atau sama dengan   $x >= $y
* <= Kurang dari atau sama dengan   $x <= $y
* <=> Spaceship         $x <=> $y
*/

$t = date(format:"H"); // Menampilkan jam dengan format 1 - 24
echo "If";
if ($t < 16) {
    echo "<br>Selamat Siang"; 
}

$t = date(format:"H"); // Menampilkan jam dengan format 1 - 24
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}

echo "<br> Nested If <br>";
if ($t < 16 ){
    echo "Selamat Pagi!";
} elseif ($t < 16){
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}