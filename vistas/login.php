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
            <div class="col-md-7 mx-auto">

                <form  action="" method="post">
                    <h2>Iniciar sesión</h2>
                    <?php
                        if ( isset( $errorLogin ) ) {
                            echo $errorLogin; 
                        }

                    ?>
                    <div class="form-group">
                        <label for="username" >Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <a href="/vistas/create_user.php">Crear cuenta aqui</a> 
            </div>
        </div>
    </div>


    
</body>
</html>