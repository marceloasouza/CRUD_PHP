    <?php
      session_start();
      include_once("../model/conexao.php");
      include_once("header.php");
      include_once("../controllers/validar_session.php");
    ?>

    <?php
      $resultado = mysqli_query($conn,"SELECT * FROM tb_usuario ORDER BY 'id'");
      $linhas = mysqli_num_rows($resultado);
    ?>

    <div class="container theme-showcase" role="main">  
      <div class="page-header">
        <h1>Usuários Cadastrados</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Foto</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>

              <?php
                while ($linhas = mysqli_fetch_array($resultado)){

                  echo "<tr>";

                  echo "<td>".$linhas['id']."</td>";
                  echo "<td>".$linhas['nome']."</td>";
                  echo "<td>".$linhas['email']."</td>";
                  echo "<td>".$linhas['senha']."</td>";
                  echo "<td>".$linhas['imagem']."</td>";
                  echo "<td>".$linhas['created'] = date("d/m/Y")."</td>";
              ?>

              <td>

              <?php
                 if($_SESSION['id'] !== $linhas['id']){
                    echo "--";
                  }else{
                  ?> 


              <a href='editar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button> 

              <a href='../controllers/delete_usuarioController.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Excluir</button></a>

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