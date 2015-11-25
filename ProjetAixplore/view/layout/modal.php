<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo isset($title_for_layout)?$title_for_layout:'Administration'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" media="screen" />
</head>
<body>

	<div class="container-fluid">
		<?php echo $this->Session->flash(); ?> 
		<?php echo $content_for_layout; ?>
	</div>

</body>
</html>