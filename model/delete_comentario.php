<?php

    class delete_comentario  {

        public function del_comentario($id){

        include_once("conexao.php");
        $result_produto = "DELETE FROM tb_comentarios WHERE id = $id ";
        $resultado_produto = mysqli_query($conn, $result_produto);
        $linhas = mysqli_affected_rows();

        if(mysqli_affected_rows($conn) != 0){

            echo "<script>alert('Comentário excluído com sucesso');window.location='../views/listar_comentarios.php'</script>"; 
        }

        else{

            echo "<script>alert('Atenção. Não foi possivel excluir o comentário');window.location='../views/home.php'</script>"; 
    
            }
    
        }

    }


?>