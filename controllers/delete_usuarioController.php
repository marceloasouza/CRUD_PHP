<?php 
   
    include_once("../model/delete_usuario.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    $delete = new delete_usuario();
	$link = $delete->del_usuario($id);

?>