<?php require 'pages/header.php'; ?>
<?php 
if (empty($_SESSION['cLogin'])){
    ?>
    
    <?php 
}
?>

	<div class="container">
		<h1>Meus Anúncios</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Título</th>
					<th>Valor</th>
					<th>Ações</th>
				</tr>
			</thead>
			<?php 
			require 'classes/anuncios.class.php';
			$a = new Anuncios();
			
			$anuncios = $a->getMeusAnuncios();
			?>
		
		</table>
	</div>



<?php require 'pages/footer.php';?>