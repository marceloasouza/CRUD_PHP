<?php

     class cadastro_novousuario {

        public function cad_novousuario($nome, $email, $cripto, $imagem){
        
        include_once("conexao.php");

        $imagem = $_FILES['imagem']['name'];
        $diretorio = "upload/"; // define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem); //efetua o upload 

        $result_usuario = "INSERT INTO tb_usuario (nome, email, senha, imagem, created ) VALUES ('$nome', '$email', '$cripto', '$imagem',  NOW())";
        $resultado_usuario = mysqli_query($conn, $result_usuario);


        if(mysqli_affected_rows($conn) != 0){

	        echo "<script>alert('Cadastro Realizado! Por favor efetue login');window.location='../views/index.php'</script>"; 
        }

        else{

	        echo "<script>alert('Atenção. Cadastro não Realizado!');window.location='../views/novosuario.php'</script>"; 
        } 

        }      
    }
?>