<?php

include_once("../model/editar_usuario.php");

$id    = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome    = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email      = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cripto = md5($senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$imagem      = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_STRING);

$editar = new editar_usuario();
$link = $editar->edit_usuario($id, $nome, $email, $cripto, $imagem);

?>