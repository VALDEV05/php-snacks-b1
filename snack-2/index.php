<?php
    /* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

    $name = $_GET["name"];
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    /* $nameLen = strlen($name);
    if ($nameLen < 3) {
        $name = 'Nome non valido';
    }
    $email = $_GET["email"];
    
    if (strpos($email,'@') != 0) {
        
    } */

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
    <p>nome: <?php echo $name;?></p>
    <p>email: <?php echo $email;?></p>
    <p>age: <?php echo $age;?></p>

    
</form>     
</body>
</html>