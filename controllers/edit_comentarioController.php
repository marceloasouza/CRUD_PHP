<?php

    include_once("../model/editar_comentario.php");

	$id    = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$comentario      = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

	$cadastro = new editar_comentario();
	$link = $cadastro->edit_comentario($id, $comentario);

?>