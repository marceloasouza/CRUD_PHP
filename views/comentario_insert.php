 <body>

    <?php
      session_start();
      include_once("header.php");
      include_once("../controllers/validar_session.php");
    ?>
    
    <div class="container theme-showcase" role="main">
      
      <div class="page-header">
        <h1>Deixe seu Comentário</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../controllers/comentario_controller.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value='<?php echo $_SESSION['nome']; ?>' disabled>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Comentário</label>
              <div class="col-sm-6">
                <textarea rows="4" class="form-control" name="comentario" placeholder=""></textarea> 
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div> <!-- /container -->
    
    <?php
      include_once("footer.php");
    ?>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>