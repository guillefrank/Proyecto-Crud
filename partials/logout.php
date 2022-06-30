<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /ProyectLogin-main/welcome.php');
?>