<html>
	<head>
		<title>Meu Site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
	</head>
	
	<body>
		
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js" ></script>
	</body>
</html>