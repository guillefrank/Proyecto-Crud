<?php 
    require 'conection.php';
    require 'partials/registro.php';
    require 'partials/login.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="estaticos/css/new.css" />
</head>

<body>
    <header>
        <div class="topnav">
            <a href="index.php">Inicio</a>
           
        </div>
    </header>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="estaticos/img/user.png" />
                </div>

                <form class="col-12" action="new.php" method="post">
                    <div class="form-group">
                        <input id="userGroup" name="nombre" class="form-control" type="text" placeholder="Nombre completo"required />
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" class="form-control" type="email" placeholder="Correo elecronico"required />
                    </div>
                    <div class="form-group">
                        <input id="contrasena" name="password" class="form-control" type="password" placeholder="Contraseña" required/>
                    </div>

                    <select class="form-select" id="rol" name="rol" required>
                        <option selected>Roles</option>
                        <option type= "text" value="administrativo">Administrativo</option>
                        <option type= "text" value="encargado">Encargado</option>
                        <option type= "text" value="operario">Operario</option>
                    </select>
                   <button type="submit" class="btn btn-primary " id="registrar" value="registrar" ><i
                            class="fas fa-sign-in-alt"></i>
                        Registrarse
                    </button>

                </form>

            </div>

        </div>

    </div>
    <footer class="w3-container w3-padding-64 w3-center w3-opacity  w3-xlarge">
        <h7>Ⓒ 2022 - Proyecto Login. Desarrollo web by New Team Delevopers.</h7>
    </footer>  
</body>


</html>