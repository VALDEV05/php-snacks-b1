<?php
    /* Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. */

    
    /* var_dump($_GET); */
    
    $items=[
        'valerio',
        'daniele',
        'giuseppe',
        'valentina',
        'fabio'
    ];

    if (in_array($_GET['text'], $items)) {
        echo 'presente in lista';
    }else{
        echo 'non è presente in lista';
    }
?>