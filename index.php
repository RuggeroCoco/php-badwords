<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Compila la form</h2>
    
    <form action="badwords.php" method="GET">
        <div>
            <label for="text">Text</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="badword">Parola da censurare</label>
            <input type="text" name="badword" id="badword">
        </div>

        <button type="submit">Invia</button>
        <button type="reset">Annulla</button>
    </form>

</body>
</html>