<?php

    class editar_usuario {

        public function edit_usuario($id, $nome, $email, $cripto, $imagem) {
            
            session_start();
            include_once("conexao.php");

            $imagem = $_FILES['imagem']['name'];
            $diretorio = "upload/"; // define o diretorio para onde enviaremos o arquivo
            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem); //efetua o upload 

            $query = mysqli_query($conn,"UPDATE tb_usuario SET id = '$id', nome = '$nome', email = '$email', senha = '$cripto', imagem = '$imagem' WHERE id = '$id' ");
            $resultado = mysqli_query($conn, $query);

            if(mysqli_affected_rows($conn) != 0){

	            echo "<script>alert('Usuário editado com sucesso');window.location='../views/listar_usuarios.php'</script>"; 
            }

            else{

	            echo "<script>alert('Atenção. Erro ao editar');window.location='../views/editar_usuario.php'</script>"; 
            }
        }
    }        

?>