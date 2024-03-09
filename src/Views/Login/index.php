<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: ../../../src/Views/Service/index.php');
  die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../../public/css/global.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/layouts.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/buttons.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/texts.css">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <title>Usuário</title>
</head>

<body>
  <form action="../../Rules/Login.php" method="POST" id="container">
    <div>
      <aside>
        <h1>Login</h1>
      </aside>
      <aside>
        <div>
          <label for="username">Nome de usuário</label>
          <input type="text" name="username" placeholder="Nome de usuário" required autocomplete="off">
        </div>
        <div>
          <label for="username">Senha</label>
          <input type="password" name="password" placeholder="Senha" required autocomplete="off">
        </div>
      </aside>
    </div>
    <input type="submit" value="ENTRAR">
  </form>
</body>

</html>