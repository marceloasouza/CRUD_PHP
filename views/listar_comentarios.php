<?php
    session_start();
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../controllers/validar_session.php");
?>
 <body>

    <?php
      $resultado = mysqli_query($conn,"SELECT * FROM tb_comentarios ORDER BY 'id'");
      $linhas = mysqli_num_rows($resultado);
    ?>

    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Comentários Enviados</h1>
        <br>
        <td>
        <a href="comentario_insert.php"><button type='button' class='btn btn-sm btn-success'>Novo Comentário</button></a>
        <a href="home.php"><button type='button' class='btn btn-sm btn-primary'>Voltar</button></a>
        </td> 
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Comentário</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>

              <?php
                while ($linhas = mysqli_fetch_array($resultado)){

                  echo "<tr>";

                  echo "<td>".$linhas['nome']."</td>";
                  echo "<td>".$linhas['comentario']."</td>";
                  echo "<td>".$linhas['created'] = date("d/m/Y")."</td>";
                  ?>
                   <td>
                   
                    <?php

                  if($_SESSION['id'] !== $linhas['id_usuario']){
                      echo "--";
                  }else{
                    
                  ?> 
                  
                  <a href='editar_comentario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a> 

                  <a href='../controllers/delete_comentarioController.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Excluir</button></a>

                  <?php
                  }
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
    
   <?php
    include_once("footer.php");
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>