<?php
	require_once __DIR__ . '/../vendor/autoload.php';
	$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
	$twig = new Twig_Environment($loader);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1><?= $twig->render('header.html', array('header' => 'Composer')) ?> header</h1>
	</body>
</html>
