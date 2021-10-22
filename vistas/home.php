<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>Home</li>
                    <li>
                       <a href="inclides/logout.php">Cerrar Sessión</a> 
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Bienbenido <?php echo $user->getNombre;?></h2> 
            </div>
        </div>
    </div>
    
</body>
</html>