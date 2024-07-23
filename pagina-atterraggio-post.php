<?php
// valori del form
$text = $_POST["text"];
$badword = $_POST["badword"];

// lunghezza testo
$text_length = strlen($text);

// cambio parolaccia scelta con ***
$new_text = str_replace($badword, '***', $text);

// lunghezza testo censurato
$new_text_length = strlen($new_text);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords-post</title>
</head>
<body>

<p><?php echo $text ?></p>
<span><?php echo $text_length ?></span>

<p><?php echo $new_text ?></p>
<span><?php echo $new_text_length ?></span>
    
</body>
</html>