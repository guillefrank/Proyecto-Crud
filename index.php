<?php

require_once 'partials/baseDeDatos.php';

session_start();


if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
require 'conection.php';
$message = '';
require 'partials/login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="estaticos/css/login.css" />
</head>

<body>
    <header>
        <div class="topnav">

            <!-- <a href="new.php">Registrarse</a>
            <a href="login.php">Login</a> -->

        </div>
    </header>
    <div class="modal-dialog text-center">
    

        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="estaticos/img/user.png" />
                </div>
                <form class="col-12" action="listUser.php" method="post">
                    <div class="form-group">
                        <h3>BIENVENIDO</h3>
                        <h4>Ingresar o Registrate</h4>
                    </div>



                    <a href="login.php"><button type="button" id="inicioSesion" class="btn btn-primary" href="listUser.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion
                        </button></a>


                    <a href="new.php"><button type="button" id="registrarse" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrase
                        </button></a>

                </form>

            </div>
        </div>
    </div>
    <div class="caja">
    <div id="motion-demo"></div>
    </div>
    
    <footer class="w3-container w3-padding-64 w3-center w3-opacity  w3-xlarge">
        <h7>Ⓒ 2022 - Proyecto Login. Desarrollo web by New Team Delevopers.</h7>
    </footer>        
  
   
</body>


</html>