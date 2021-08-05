<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Login php PDO</title>

    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
        
    <main class="form-signin">
      <form action="login.php" method="post">
        <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Informe seus dados</h1>
        <?php 
          if(isset($_COOKIE['data_verification'])){
          ?>
          <div class="alert alert-danger" id="alert-input" role="alert">
            <?php echo $_COOKIE['data_verification']; ?>
          </div>
          <?php
          }
        ?>
        <?php 
          if(isset($_COOKIE['confirm_register'])){
          ?>
          <div class="alert alert-success" id="alert-input" role="alert">
            <?php echo $_COOKIE['confirm_register']; ?>
          </div>
          <?php
          }
        ?>

        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="nome@email.com">
        <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha">

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="acao">Entrar</button>
        <p>Ainda não tem conta? <a href="cadastrar.php">Criar conta</a></p>
        <p class="mt-5 mb-3 text-muted"><p id="date-year"></p></script></p>
      </form>
    </main>

    <script>
      const d = new Date();
      document.getElementById("date-year").innerHTML = "&copy; "+ d.getFullYear();
    </script>
  </body>
</html>
