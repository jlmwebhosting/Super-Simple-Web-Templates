<?php
	
	header('Content-type: text/html; charset=utf-8');

?><!DOCTYPE html>
<html lang="nb-NO">
<head>
	<title><?php echo $pagetitle ?> - Sitename</title>
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="_styles.css?v=<?php echo rand(); ?>" rel="stylesheet" type="text/css" />
	<!--[if lte IE 8]>
		<style>
			/* IE-bypass */
		</style>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/global.js?v=<?php echo rand(); ?>" type="text/javascript"></script>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<?php require('_database.php'); ?>
<!-- /header -->