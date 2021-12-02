<?php
    /* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 */
        $prima_partita=[
            $andata=[
                'casa'=> 'Milano',
                'ospite'=> 'Cantù', 
                'punti_casa'=>'80', 
                'punti_ospite'=> '60'],
            $ritorno=[
                'casa'=> 'Cantù',
                'ospite'=> 'Milano', 
                'punti_casa'=>'109', 
                'punti_ospite'=> '70']];
        
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

<h1>Giornata 1 Milano-Cantù</h1>
<h2>Andata</h2>
  <p><?= $andata['casa'].' - '.$andata[ospite].' | '.$andata['punti_casa'].' - '.$andata['punti_ospite']?></p>
  <h2>Ritorno</h2>
    <p><?= $ritorno['casa'].' - '.$ritorno[ospite].' | '.$ritorno['punti_casa'].' - '.$ritorno['punti_ospite']?></p>

</body>
</html>