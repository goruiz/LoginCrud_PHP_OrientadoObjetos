<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'El usuario ha sido creado correctamente';
    } else {
      $message = 'Hubo un problema al crear el usuario';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse
    </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Iniciar sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="usuario" type="text" placeholder="Ingrese el usuario">
      <input name="password" type="password" placeholder="Ingrese la contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme la contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
