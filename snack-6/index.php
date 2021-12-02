<?php
/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
        ],
        
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini',
        ],
    ],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks-6</title>
</head>
<body>
    <div class="teachers">
        <?php for ($i = 0; $i <= count($db['teachers']); $i++) { ?>
        <p>
            <?= $db['teachers'][$i]['name'] ?> 
            <?= $db['teachers'][$i]['lastname'] ?> 
        </p>
        <?php } ?>
    </div>

    <div class="pm">
        <?php for ($i = 0; $i <= count($db['pm']); $i++) { ?>
        <p>
            <?= $db['pm'][$i]['name'] ?> 
            <?= $db['pm'][$i]['lastname'] ?> 
        </p>
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
    body{
        display:flex;
    }
    .teachers, 
    .pm {
        width: calc(100% / 2);
        padding: 1rem 2rem;
        text-align: center;
        margin: 1rem auto;
    }

    .teachers {
        background-color: grey;
    }

    .pm {
        background-color: green;
    }
</style>