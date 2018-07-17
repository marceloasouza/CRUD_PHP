<?php
  //validar a sessao
if ( ! isset( $_SESSION ) || ! isset( $_SESSION['logado'] ) || $_SESSION['logado'] != true )
{
     header( 'Location: index.php' );
}
  ?>