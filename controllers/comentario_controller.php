    <?php
     	include_once("../model/cadastro_comentario.php");

    	$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

    	$cadastro = new cadastro_comentario();
		$link = $cadastro->cadastrar_comentario($comentario);

    ?>