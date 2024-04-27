<?php

$namaBuah = array("Nanas","Mangga","Jeruk","Apel","Melon","Manggis");
echo"saya suka" .$namaBuah[0]. ",".  $namaBuah[1]." dan ".$namaBuah[2]."."."<br>";

// tampilkan Mangga
echo "saya suka".$namaBuah[2]."<br>";
// tampilkan Jeruk
echo "saya suka".$namaBuah[3]."<br>";
// tampilkan Apel
echo "saya suka".$namaBuah[4]."<br>";
// tampilkan Melon
echo "saya suka".$namaBuah[5]."<br>";

// array dengan spesifik index
$umur = array ("Andi"=>"35 Tahun","Ben"=>"37 Tahun","Joe"=>"46 Tahun");
$umur['ahmad']="50 Tahun";
echo "umur andi adalah".$umur["Andi"]."<br>";
// tampilkan semua umur
?>