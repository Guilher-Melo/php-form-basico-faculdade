<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recebendo dados</title>
  <style>
    .alinhar {
      text-align: center;
      margin: auto;
    }

    .texto {
      font-size: 19px;
    }
  </style>
</head>
<body class="alinhar">
  <?php 
    $nome = $_GET["nome"];
    $email = $_GET["email"];

    echo "<h1> Olá, $nome </h1>";
    echo "<p class='texto'> Seu nome: <strong>$nome</strong> e seu email: <strong>$email</strong> foram recebidos com sucesso!";
  ?>
</body>
</html>