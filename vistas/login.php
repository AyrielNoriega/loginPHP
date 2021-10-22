<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessiones</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post"> 
                    <?php
                        if ( isset( $errorLogin ) ) {
                            echo $errorLogin; 
                        }

                    ?>
                    <h2>Iniciar sesión</h2>
                    <p>Nombre de usuario</p>
                    <input type="text" name="username">
                    <p>Password</p>
                    <input type="password" name="password">
                    
                    <p><input type="submit" value="Iniciar Sesión"></p>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>