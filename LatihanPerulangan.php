<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <style>
        .star {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #ff0000;
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
    <h1>Latihan Perulangan</h1>
    <?php
        // Define the number of rows
        $rows = 10;

        // Loop through each row
        for ($row = 1; $row <= $rows; $row++) {
            // Loop through each column in the current row
            for ($col = 1; $col <= $row; $col++) {
                echo "*";
            }
            // Add a line break to separate rows
            echo "<br>";
        }
    ?>
</body>
</html>