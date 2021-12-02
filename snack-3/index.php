<?php 
   /*  Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. */

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    #foreach loop
    /* foreach ($array as $key => $value) {
        for ($i=0; $i < count($value); $i++) { 
            #print the post
        }
    } */
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
    <style>
        .row{
            display:flex;
            flex-wrap: wrap;
            justify-content: center;
            
        }
        .col-3{
            width: calc(100% / 4);
        }
        .post{
            max-width:300px;
            min-width: 250px;
            border:1px solid black;
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="row">
        <?php
            foreach ($posts as $key => $value) {
                for ($i=0; $i < count($value); $i++) { ?>
                    <div class="post col-3">
                        <h3>Post</h3>
                        <p>Titolo:  <?= $value[$i]['title']?></p>
                        <p>Autore:  <?= $value[$i]['author']?></p>
                        <p>Testo:   <?= $value[$i]['text']?></p>
                    </div>
                    

                <?php }
            }?>
        
    </div>
    
</body>
</html>
