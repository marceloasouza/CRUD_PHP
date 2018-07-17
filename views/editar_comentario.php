<?php
  session_start();
  include_once("../model/conexao.php");
  include_once("../controllers/validar_session.php");

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  //Executando a consulta

  $result = mysqli_query($conn,"SELECT * FROM tb_comentarios WHERE id = '$id' LIMIT 1");
  $resultado = mysqli_fetch_assoc($result);

?>

  <body>

    <?php
      include_once("header.php"); 
    ?>

    <div class="container theme-showcase" role="main">
      
      <div class="page-header">
        <h1>Editar Comentário</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          
            <form class="form-horizontal" method="POST" action="../controllers/edit_comentarioController.php">

            <div class="form-group">
              <label for="inputid" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $resultado['id']; ?>">
              </div>
            </div>
          
            <div class="form-group">
              <label for="nome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" disabled>
              </div>
            </div>

          <div class="form-group">
              <label for="comentario" class="col-sm-2 control-label">Comentário</label>
              <div class="col-sm-6">
                <textarea rows="4" class="form-control" name="comentario" placeholder=""> 
                  <?php echo $resultado['comentario']; ?>  
                  </textarea>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>