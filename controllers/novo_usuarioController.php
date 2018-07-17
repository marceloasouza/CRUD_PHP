<?php

    include_once("../model/novo_usuario.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cripto = md5($senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
    $imagem = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_STRING);
    

    $cadastro = new cadastro_novousuario();
	$link = $cadastro->cad_novousuario($nome, $email, $cripto, $imagem);

?>
