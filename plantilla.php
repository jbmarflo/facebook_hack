<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Facelook: Hacker Social</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="keywords" content="hack facebook, facebook, hacker, red social, hacker cuenta, como hacjer, hack face, Flash, Flash CS5, Dreamweaver, Dreamweaver CS5, Fireworks, Fireworks CS5, Illustrator, php, tiendas en linea, actionscript 3, Action Script, juegos, juegos on line, cursos flash CS5, cursos adobe, adobe flash, adobe dreamweaver, adobe illustrator, adobe fireworks, flash builder, flex 4, programacion, orientado, objetos, maquetacion, css, hojas de estilo, SEO, posicionamiento, redes sociales, facebook, youtube, twitter, html5, css3, animacion 2d, efectos web, cursos empresas lima, intructor web, curso virtual, curso on line">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <script>
function Validar(){
	if(document.buUs.colocarU.value == ""){
			document.buUs.colocarU.focus()
			return
		}
		if(document.buUs.colocarU.value != ""){
			document.buUs.action = "hackeado.php";
			document.buUs.proceso.value = "Buscar";
			document.buUs.submit();
		}
	
	}
    </script>
	</head>
	<body class="homepage">

		<!-- Header -->
			<?php include "modulos/header.php"; ?>
			
		<!-- Features -->
			
		
		<!-- Banner -->
			<?php include "modulos/banner.php"; ?>

		<!-- Main -->
		<?php include "modulos/piepagina.php"; ?>

	</body>
</html>