<?php
session_start();
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

    <link rel="stylesheet" type="text/css" href="estaticos/css/listUser.css" />
</head>

<body>
    <header>
        <div class="topnav">

            <a href="#">Editar</a>
            <a href="partials/logout.php">Cerrar Sesion</a>
            <a href="main.php" class="split">Api</a>
        </div>
    </header>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="estaticos/img/user.png" />
                </div>

                <div id="top-header">

                    <h5> BIENVENIDO: <?=$_SESSION['user_id'];?> </h5>

                </div>


                <div class="container">
                    <div class="col">
                        <form action="">
                            <?php
                            include_once 'conection.php';
                            include 'partials/edit.php'
                            ?>
                        </form>

                            <br>
                            <h2 class="listUsuarios">LISTA DE USUARIOS</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="usuario">Usuario</th>
                                        <th class="correo">Correo Electronico </th>
                                        <th class="contra">Contraseña</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $lista = $link->prepare("SELECT * FROM users");
                                    $lista->execute();
                                    $usuarios = $lista->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($usuarios as $usuario) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $usuario['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $usuario['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo substr($usuario['password'], -6); ?>
                                        </td>
                                    </tr>

                                    <?php } ?>
                            </table>



                        </form>
                    </div>
                </div>
            </div>
         </div>
     </div>
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <h7>Ⓒ 2022 - Proyecto Login. Desarrollo web by New Team Delevopers.</h7>
    </footer>  
</body>


</html>