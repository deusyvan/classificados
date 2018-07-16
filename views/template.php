<html>
	<head>
		<title>Meu Site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<a href="./" class="navbar-brand">Classificados</a>
    			</div>
    			<ul class="nav navbar-nav navbar-right">
    				<?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
    					<li><a href="#">Usuário: <?php echo $_SESSION['cNome']; ?></a></li>
    					<li><a href="meus-anuncios.php">Meus Anúncios</a></li>
    				    <li><a href="sair.php">Sair</a></li>
    				<?php  else:?>
        				<li><a href="cadastre-se.php">Cadastre-se</a></li>
        				<li><a href="login.php">Login</a></li>
    				<?php endif; ?>
    			</ul>
    		</div>
    	</nav>
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js" ></script>
	</body>
</html>