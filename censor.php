<?php
$paragraph = $_GET ["paragraph"];
$word = $_GET ["word"];
$new_paragraph = str_replace($word, "***", $paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex">
        <div class="px-3">
            <h2>Testo non censurato, lunghezza:<?php echo strlen($paragraph)?> </h2>
        <p>
            <?php echo $paragraph ?>
    </p>
        </div>
        <div class="px-3">
        <h2>Testo censurato, lunghezza:<?php echo strlen($new_paragraph)?> </h2>
        <p>
        <?php echo $new_paragraph ?>
    </p>
        </div>
    </div>
</body>
</html>