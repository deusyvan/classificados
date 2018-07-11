<?php  require 'pages/header.php'; ?>
<?php 
require 'classes/anuncios.class.php';
require 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();

?>
	
	<!-- Jumbotron -->
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Nós temos hoje <?php echo $total_anuncios; ?> anúncios</h2>
			<p>E mais de <?php echo $total_usuarios; ?> usuários cadastrados</p>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
				<h4>Pesquisa Avançada</h4>
			</div>
			<div class="col-sm-9">
				<h4>Últimos Anúncios</h4>
				
			</div>
		</div>
	</div>
<?php require 'pages/footer.php'; ?>