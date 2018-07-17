<?php

    session_start(); 
    include_once("../model/conexao.php");
    include_once("header.php");
    include_once("../controllers/validar_session.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    //Executando a consulta

    $result = mysqli_query($conn,"SELECT * FROM tb_usuario WHERE id = '$id' LIMIT 1");
    $resultado = mysqli_fetch_assoc($result);

  ?>
<body>

  <div class="container theme-showcase" role="main">
    
    <div class="page-header">
      <h1>Editar usuário</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
              
      <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="../controllers/edit_usuarioController.php">

        <div class="form-group">
            <label for="inputid" class="col-sm-2 control-label"></label>
            <div class="col-sm-6">
              <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $resultado['id']; ?>">
            </div>
          </div>

          <div class="form-group">
              <label for="nome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $resultado['nome']; ?>">
              </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $resultado['email']; ?>">
                </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo $resultado['senha']; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="imagem" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" name="imagem" placeholder="Foto" value="<?php echo $resultado['imagem']; ?>">
              </div>
            </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Editar</button>
                  </div>
                </div>
          </form>
            </div>
          </div>
        </div> <!-- /container -->
  <?php
    include_once("footer.php");
  ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>