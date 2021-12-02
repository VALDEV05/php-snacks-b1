<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$random_number_array = [];

while (count($random_number_array) < 20) {
    $random_number = rand(1, 100);

    if (!in_array($random_number, $random_number_array)) {
        $random_number_array[] = $random_number;
    }
}
$sortArray = sort($random_number_array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <div>
        <?php 
            for ($i=0; $i < count($random_number_array); $i++) { ?>
                    
                    <p><?= $random_number_array[$i]?></p>

                <?php
            }?>
    </div>
</body>
</html>