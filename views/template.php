<html>
	<head>
		<title>Meu Site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/javascript.js" ></script>
	</head>
	
	<body>
		
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		
	</body>
</html>