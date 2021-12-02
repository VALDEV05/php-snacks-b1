<?php
    /* Prendere un paragrafo abbastanza lungo, 
    contenente diverse frasi. Prendere il paragrafo 
    e suddividerlo in tanti paragrafi. Ogni punto un 
    nuovo paragrafo. */

    $paragraph= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, repudiandae ullam eius modi, quibusdam facilis blanditiis laboriosam animi enim error, voluptas itaque. Sit illo ratione doloribus modi provident quae omnis, sequi optio doloremque error vero consequuntur natus similique quia aut ipsum cumque ea deserunt quis non. Amet ut, laborum atque natus rerum tempora animi non voluptate ipsam adipisci explicabo corporis dolore maiores, totam repellat repellendus eaque quibusdam fugit quos perferendis repudiandae magnam. Accusamus in dolorem obcaecati ut dolore recusandae laboriosam eos delectus. Id dolore corporis error culpa sapiente voluptates autem similique laborum. Natus nulla quia voluptate voluptates aut quam, cumque incidunt dignissimos laudantium officia error! Rerum numquam quis, doloremque ipsa ex explicabo hic. Aspernatur molestias harum velit, ut sunt laborum cupiditate. Earum odio repellendus fugit quo impedit, error modi unde corrupti quam voluptate sit enim magnam ut suscipit doloremque architecto in qui explicabo voluptatum nihil optio, at veniam delectus odit. Numquam quis, aliquam blanditiis quos delectus eaque, cum libero illum ad adipisci, ducimus natus vitae! Nisi eius quod dolorem cum eum consequatur rerum, voluptatibus laudantium odit porro aut voluptas culpa temporibus, asperiores laboriosam alias iure vero molestiae. Error eaque repellat molestias nihil quasi accusantium, praesentium, mollitia aspernatur eveniet modi qui?';

    $new_paragraphs = explode('.', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>

</head>
<body>
    <p>
        <strong>Original Paragraph:</strong>
        <?= $paragraph ?>
    </p>

    <p>
        <strong>New Paragraphs:</strong>
        <?php for ($i = 0; $i < count($new_paragraphs); $i++) {
            $element = $new_paragraphs[$i]; ?>
           <ol>
               <li><?= $element ?></li> 
            </ol>
    <?php
        } ?>
    </p>
</body>
</html>