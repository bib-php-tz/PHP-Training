<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
</head>
<body>
    


<?php
function drawChessBoard($rows, $cols) {
    echo '<table border="1" style="border-collapse: collapse;">';
    for ($i = 0; $i < $rows; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $cols; $j++) {
            if (($i + $j) % 2 === 0) {
                echo '<td class="white"></td>';
            } else {
                echo '<td  class="black"></td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}


drawChessBoard(8, 8);

?>

</body>
</html>


