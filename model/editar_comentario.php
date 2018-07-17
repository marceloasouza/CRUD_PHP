<?php

    class editar_comentario  {

        public function edit_comentario($id, $comentario) {

        session_start();
	    include_once("conexao.php");

        $query = mysqli_query($conn,"UPDATE tb_comentarios SET id = '$id', nome = '{$_SESSION['nome']}', comentario = '$comentario' WHERE id = '$id' ");
	    $resultado = mysqli_query($conn, $query);

	    if(mysqli_affected_rows($conn) != 0){
		    echo "<script>alert('Comentário editado com sucesso');window.location='../views/listar_comentarios.php'</script>"; 
	    }

	    else{
		    echo "<script>alert('Atenção. Erro ao editar comentário');window.location='../views/editar_comentario.php'</script>"; 
	        }

        }

    }

?>
