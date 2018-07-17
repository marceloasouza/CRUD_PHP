<?php
    session_start();
    include_once("header.php");
    include_once("../controllers/validar_session.php");
?>

	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Comentários e Sugestões</h2>
				<span class="byline">Queremos a sua opnião</span>
			</div>
			<p>Clique na imagem ao lado e deixe a sua opnião sobre nosso serviço, ou sua sugestão. A sua opnião é muito importante para nós. Obrigado!</p>
		</div>
		<div id="sidebar"><a href="comentario_insert.php" class="image image-full"><img src="images/sugestoes3.png" alt="" /></a></div>
	</div>

	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>O que estão falando sobre nós ?</h2>
				<span class="byline">Veja aqui a opnião de alguns de nossos clientes</span>
			</div>
			<p>Clique na imagem ao lado, e verifique se o seu comentário está na lista. Aqui sua opnião é importante para o nosso crescimento.</p>
		</div>
		<div id="sidebar"><a href="listar_comentarios.php" class="image image-full"><img src="images/comments.jpg" alt="" /></a></div>
	</div>

<?php 
	include_once("footer.php");
 ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>
