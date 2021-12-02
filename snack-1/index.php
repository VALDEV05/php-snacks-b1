<?php
    /* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 */
        $prima_partita = [
            [
                'casa'=> 'Milano',
                'ospite'=> 'Cantù', 
                'punti_casa'=>'80', 
                'punti_ospite'=> '60'
            ],
            [
                'casa'=> 'Cantù',
                'ospite'=> 'Milano', 
                'punti_casa'=>'109', 
                'punti_ospite'=> '70'
                ]
            ];
        
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
            <h1>PARTITE MILANO CANTÙ</h1>
        <div>
            <?php for ($i = 0; $i < count($prima_partita); $i++) {
            $game = $prima_partita[$i]; ?>
            <p><?= $game['casa'] ?> - <?= $game['ospite'] ?> | <?= $game['punti_casa'] ?>-<?= $game['punti_ospite'] ?></p>
        <?php } ?>
        </div>

    </body>
</html>
    

