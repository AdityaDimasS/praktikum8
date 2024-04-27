<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// menampilkan data array
print_r($array);

// menampilkan kelas 1D
print_r($array['1D']);

// menampilkan kelas 1D dengan index 0
echo $array['1D'][0];

// tampilkan fajri
echo $array['1D'][1];

// tampilkan andi
echo "<br>Andi tidak ada di kelas 1D<br>";

// data kelas bisa dituliis juga dengan
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];

?>