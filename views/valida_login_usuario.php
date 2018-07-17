<?php
	session_start();
	$_SESSION['logado'] = true;

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$cripto = md5($senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
	
	include_once("../model/conexao.php");

	$result_usuario = mysqli_query($conn,"SELECT * FROM tb_usuario WHERE email='$email' and senha='$cripto' LIMIT 1") or die (mysqli_error());
	$resultado_usuario = mysqli_fetch_assoc($result_usuario);

		$_SESSION['id'] = $resultado_usuario['id'];
		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['email'] = $resultado_usuario['email'];
		$_SESSION['created'] = $resultado_usuario['created'];

	if (empty($resultado_usuario)) {
		//Mensagem de Erro
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		//Envia para a pagina Login
		header("Location: restrito.php");
	}else{
		
		header("Location: listar_usuarios.php");
	}

?>




