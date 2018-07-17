<?php

	ob_start();

	if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioSenha'] == "")) {
		unset(
			$_SESSION['usuarioId'],                  
			$_SESSION['usuarioEmail'],         
			$_SESSION['usuarioSenha']
		);
		//Erro
		$_SESSION['loginErro'] = "Área restrita - Efetue o Login";
		//Redirecionando Usuário para a tela de login
		header("Location: index.php");
	}
?>