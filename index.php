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
                        <div class="col-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam et maiores nam culpa nobis. In provident omnis laudantium, architecto ratione veniam illum numquam eius voluptate nam. Distinctio earum consequuntur ullam.<br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis magni porro, illum voluptate voluptas delectus temporibus, voluptatem maiores repellat saepe perferendis doloribus excepturi amet cupiditate molestias odio, rerum dolorem deleniti!<br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, possimus ratione assumenda corrupti odit nisi veniam, est, nostrum sapiente hic molestiae. Ipsa non est, deleniti debitis saepe veniam omnis quas.
                            </p>
                        </div>
                        <div class="col-4">
                        <label for="word">Parola da censurare:</label>
                        <input type="text" id="word" name="word" required>
                        <input type="submit" value="Invia">
                        </div>
                    </div>
                </form>
            </div>           
            
        </div>
    </div>
</body>
</html>