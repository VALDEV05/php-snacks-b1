<?php
    /* Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. */
        $ads = [
            [
                'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
                'link' => 'https://www.google.com',
                'is_active' => true,
            ],
            [
                'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
                'link' => 'https://www.facebook.com',
                'is_active' => true,
            ],
            [
                'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
                'link' => 'https://codepen.io',
                'is_active' => false,
            ],
            [
                'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
                'link' => 'https://laravel.com',
                'is_active' => false,
            ],
            [
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
                'link' => 'https://www.php.net',
                'is_active' => true,
            ],

        ];
        #questa funzione al refresh entra nel'url stabilito, ora devo rendere dinamico il tutto;

   #header("refresh: 1; url = 'https://laravel.com");
        #stampo le pubblicità a schermo

        #shuffle
        /* This function shuffles (randomizes the order of the elements in) an array. It uses a pseudo random number generator that is not suitable for cryptographic purposes.  */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blocco-2/snack-1</title>
</head>
<body>
    <div style="display:flex; flex-direction: column; justify-content:center; align-items:center;">
        <!-- stampare solo le pubblicità con 'is_active' => true  verifico quelle-->
        <?php if( $ads[0]['image_path']){ shuffle($ads); ?>
            
            <br>
            <a href="<?= $ads[0]['link']?>"><img src="<?= $ads[0]['image_path']; ?>" style="width: 300px;"></a>
        <?php }
        ?>
    </div>
</body>
</html>