<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: productos1.php');
  }
  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: productos1.php");
    } else {
      $message = 'Lo sentimos, el usuario no existe';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesión</h1>
    <span>o <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="usuario" type="text" placeholder="Enter your usuario">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
