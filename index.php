<?php  require 'pages/header.php'; ?>
<?php 
require 'classes/anuncios.class.php';
require 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();

$p = 1;
if (isset($_GET['p']) && !empty($_GET['p'])){
    $p = addslashes($_GET['p']);
}

$por_pagina = 2;
$total_paginas = ceil($total_anuncios / $por_pagina);

$anuncios = $a->getUltimosAnuncios($p, $por_pagina);

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
				<form method="GET">
					<div class="form-group">
						<select name="filtros[categoria]" class="form-control">
						
						</select>
					</div>
				</form>
			</div>
			<div class="col-sm-9">
				<h4>Últimos Anúncios</h4>
				<table class="table table-striped">
					<tbody>
						<?php foreach ($anuncios as $anuncio): ?>
							<tr>
								<td>
                					<?php if (!empty($anuncio['url'])): ?>
                						<img src="assets/images/anuncios/<?php echo $anuncio['url'];?>" height="50" border="0" />
                					<?php else: ?>
                						<img src="assets/images/default.jpg"  height="50" border="0" />
                					<?php endif; ?>
                				</td>
								<td>
									<a href="produto.php?id=<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br/>
									<?php echo $anuncio['categoria']; ?>
								</td>
								<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				
				<ul class="pagination">
					<?php for ($i=1; $i<=$total_paginas; $i++): ?>
						<li class="<?php echo ($p==$i)?'active':''; ?>"><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>
<?php require 'pages/footer.php'; ?>