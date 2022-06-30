<?php
/* verificamos que exista y esten correctos usuario y contraseña*/


if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $link->prepare('SELECT id, nombre, email, password, rol FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);

  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['nombre'];
    header("Location: listUser.php");
  } else {
    echo "<script type='text/javascript'>alert('la contraseña es incorrecta, ingrese nuevamente');</script>";
  
  }
}
