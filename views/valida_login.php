<?php
    session_start();
    include_once("../model/conexao.php");

    $_SESSION['logado'] = true;

    if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $cripto = md5($senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

        $result_usuario = mysqli_query($conn,"SELECT * FROM tb_usuario WHERE email='$email' and senha='$cripto' LIMIT 1") or die (mysqli_error());
        $resultado_usuario = mysqli_fetch_assoc($result_usuario);

        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['email'] = $resultado_usuario['email'];
        $_SESSION['created'] = $resultado_usuario['created'];

    if(empty($resultado_usuario)){
        $_SESSION['loginErro'] = "Usuário ou senha inválida";
        header("Location: index.php");
    }
    elseif (isset($resultado_usuario)) {
        header("Location: home.php");
    }
    else{
        $_SESSION['loginErro'] = "Usuário ou senha inválida";
        header("Location: index.php");
    } 
    }
?>







