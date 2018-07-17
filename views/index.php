<?php
  session_start();
  include_once("header.php");
?>

<body>
<?php
  unset(
  $_SESSION['usuarioId'],                    
  $_SESSION['usuarioLogin'],         
  $_SESSION['usuarioSenha']);
?>

    <div class="container">

      <form class="form-signin" method="POST" action="valida_login.php">

        <h2 class="form-signin-heading">Login</h2>
        
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Digite o e-mail" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
        
        <button class="btn btn-primary btn-block" type="submit">Entrar</button><br>
         <a href="novousuario.php"><button class="btn  btn-success btn-block" type="button">Cadastrar</button></a>

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