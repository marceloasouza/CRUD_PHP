<?php
    
    class cadastro_comentario  {

        public function cadastrar_comentario($comentario){

        session_start();
        include_once("conexao.php");

        $result = "INSERT INTO tb_comentarios (nome, id_usuario, comentario, created) VALUES ('{$_SESSION['nome']}', '{$_SESSION['id']}', '$comentario',  NOW())";

        $resultado = mysqli_query($conn, $result);

        if(mysqli_affected_rows($conn) != 0){
            echo "<script>alert('Comentário enviado com sucesso');window.location='../views/listar_comentarios.php'</script>"; 
        }

        else{
            echo "<script>alert('Atenção. Comentário não enviado.');window.location='../views/comentario_insert.php'</script>"; 
        }
      }
        
    }

?>