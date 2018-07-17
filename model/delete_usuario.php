<?php

    class delete_usuario {

        public function del_usuario($id) {

            include_once("conexao.php");
            $result_produto = "DELETE FROM tb_usuario WHERE id = $id ";
            $resultado_produto = mysqli_query($conn, $result_produto);
            $linhas = mysqli_affected_rows();

            if(mysqli_affected_rows($conn) != 0){

            echo "<script>alert('Usuário excluído com sucesso');window.location='../views/listar_usuarios.php'</script>"; 
            }
            else{
                echo "<script>alert('Atenção. Não foi possivel excluir o usuário');window.location='../views/listar_usuarios.php'</script>"; 
            }
        }
    }    

?>