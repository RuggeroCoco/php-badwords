<?php
$text = $_GET["text"];
$badword = $_GET["badword"];
$censured_text = str_replace($badword, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <h2>Testo originale</h2>
    <p><?php echo $text; ?></p>
    <p>La lunghezza del testo è di <?php echo strlen($text);?>caratteri</p>

    <h2>Testo censurato</h2>
    <p><?php echo $censured_text; ?></p>
    <p>La lunghezza del testo censurato è di <?php echo strlen($censured_text);?>caratteri</p>

</body>
</html>