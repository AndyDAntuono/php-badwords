<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> PHP Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./censor.php" method="GET">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <label for="paragraph">Paragrafo:</label><br>
                                <textarea id="paragraph" name="paragraph" rows="5" cols="100" required></textarea>
                            </div>
                            <div>
                                <label for="word">Parola da censurare:</label>
                                <input type="text" id="word" name="word" required>
                                <input type="submit" value="Invia">
                            </div>
                
                        </div>
                    </div>
                </form>
            </div>           
            
        </div>
    </div>
</body>
</html>