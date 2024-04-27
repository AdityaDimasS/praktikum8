<?php
// Data from the image
$data = [
    ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi', 'NIS' => '2345'],
    ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni', 'NIS' => '65'],
    ['No Urut' => 3, 'Poin' => 70, 'Siswa' => 'Jihan', 'NIS' => ''],
    ['No Urut' => 4, 'Poin' => 85, 'Siswa' => 'Aya', 'NIS' => ''],
    ['No Urut' => 5, 'Poin' => 90, 'Siswa' => 'Ita', 'NIS' => '6'],
    ['No Urut' => 6, 'Poin' => 95, 'Siswa' => 'Budi', 'NIS' => '7'],
    ['No Urut' => 7, 'Poin' => 65, 'Siswa' => 'Tini', 'NIS' => '8'],
    ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari', 'NIS' => ''],
];
$found = false;
// Display student data based on the criteria
function displayStudentData($criteria, $value, $data) {
    foreach ($data as $student) {
        if ($student[$criteria] == $value) {
            echo "<p>Nama siswa dengan $criteria $value adalah <strong>" . $student['Siswa'] . "</strong> dengan poin <strong>" . $student['Poin'] . "</strong></p>";
            return; // If found, exit the function
        }
    }
    // If not found, display message
    echo "<p>Tidak ada siswa dengan $criteria $value</p>";
}
foreach ($data as $student) {
    if ($student['Poin'] == 100) {
        echo "Nama siswa yang memiliki poin 100 adalah: <strong>" . $student['Siswa'] . "</strong><br>";
        $found = true;
    }
}


// Display the data
displayStudentData('No Urut', 5, $data);
displayStudentData('Poin', 90, $data);
displayStudentData('NIS', '6', $data);
if (!$found) {
    echo "Tidak ada siswa yang memiliki poin 100";
}
?>

