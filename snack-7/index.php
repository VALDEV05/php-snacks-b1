<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'grades' => [7, 8, 5, 9, 8, 6, 7],
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'grades' => [6, 8, 7, 6, 7, 7, 7],
    ],

    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'grades' => [6, 7, 4, 6, 7, 6, 7],
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Pellegrini',
        'grades' => [8, 8, 9, 8, 7, 8, 9],
    ],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks-7</title>
</head>
<body>
    <div>
        <?php for ($i = 0; $i < count($students); $i++) { ?>
            <div class="students">
                <p>
                    <strong>Student:</strong>  
                    <?= $students[$i]['name'] ?> 
                    <?= $students[$i]['lastname'] ?> 
                </p>
                <p>
                    <strong>Grades Average:</strong>
                    <?= round(
                        array_sum($students[$i]['grades']) /
                            count($students[$i]['grades']),
                        1
                    ) ?>
                </p> 
            </div>
        
        <?php } ?>
    </div>
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
.students{
    width: calc(100% / 3);
    border: 1px solid black;
    text-align: center;
}
</style>