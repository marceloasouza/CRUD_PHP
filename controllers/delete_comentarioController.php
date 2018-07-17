<?php 
   
    include_once("../model/delete_comentario.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $delete = new delete_comentario();
    $link = $delete->del_comentario($id);

?>