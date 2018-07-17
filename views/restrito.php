<?php
  session_start();
?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/signin.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

</head>
<body>
<div id="header">
  <div id="menu" class="container">
    <ul>
      <li class="current_page_item"><a href="home.php" accesskey="1" title="">Array Enterprises</a></li>
      <li><a href="index.php" accesskey="1" title="">Home</a></li>
      <li><a href="logout.php" accesskey="3" title="">Sair</a></li>
    
    </ul>
  </div>
</div>

    <?php
      unset(
      $_SESSION['usuarioId'],                    
      $_SESSION['usuarioLogin'],         
      $_SESSION['usuarioSenha']);
    ?>

    <div class="container">
      <form class="form-signin" method="POST" action="valida_login_usuario.php">
        <h2 class="form-signin-heading">Login</h2>
        
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Digite o e-mail" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>

        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
      </form>
       <p class="text-center text-danger">
          <?php
            if(isset($_SESSION['loginErro'])) {
              echo $_SESSION['loginErro'];
              unset ($_SESSION['loginErro']);    
            }
          ?>
       </p>
    </div> <!-- /container -->

    <?php
      include_once("footer.php");
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>