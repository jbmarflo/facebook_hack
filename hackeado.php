<?php include"importante/conexion.php";?>
<?php
$buscador = $_POST['colocarU'];

?>
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
        <script type="text/javascript" src="js/rutinas.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <script>
function ValidarBusqueda(){
	
	if(document.buUs.colocarU.value == ""){
			alert("Debes Colocar un email o celular.");
			document.buUs.colocarU.focus();
			return;
		}
	if(document.buUs.colocarU.value != ""){
		document.buUs.action = "hackeado.php";
		document.buUs.submit();
	}
			
	
	}
	
function Imagen(codigo){
	 url = "datos-hackeado.php?zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=<?php echo $buscador;?>";
	 AbrirCentro(url,'Agregar', 1000, 600, 'no','no');
 }
    </script>
    
    <script type="text/javascript">
var adfly_id = 5377189;
var adfly_advert = 'int';
var adfly_protocol = 'http';
var adfly_domain = 'adf.ly';
var popunder = true;
</script>
<script src="https://cdn.adf.ly/js/display.js">/*cambio*/</script>
	</head>
	<body class="homepage">

		<!-- Header -->
			<?php include "modulos/header.php"; ?>
			
		<!-- Features -->
			
		<div id="features-wrapper">
        	<section id="features" class="container">
            	<h1>Resultado de Búsqueda</h1>
            <?php
				$buscarPro="SELECT * FROM usuarios WHERE (usuario= '$buscador' AND estado='A')";
				$resultadoBuscar = mysql_query($buscarPro);				
				$numregU= mysql_num_rows($resultadoBuscar);
				
				$buscarProD="SELECT * FROM usuarios WHERE (usuario= '$buscador' AND estado='D')";
				$resultadoBuscarD = mysql_query($buscarProD);				
				$numregUD= mysql_num_rows($resultadoBuscarD);
				
				$codigo = $filaUsuario['codUsuarios'];
				if($numregU  ==0 && $numregUD==0){
					$palabraB1='No existe';
					$Noexist = 'Para ver el vídeo y saber como conseguir la contraseña clien en';
					$incio='QUE PENA! ';
					$nombreBoton='VER VÍDEO';
					$href='href="video.php"';
					$color='#C00003';
				}elseif($numregU  ==0 && $numregUD >0){
					$palabraB1='Esta desactivado';
					$color='#C00003';
					$incio='QUE PENA! ';
					$Noexist='Alguien ocultó todos los datos del usuario; sin embargo, usted puede volver a conseguir la contraseña o si desea saber los datos guardados anteriormente puede hacer clic en ';
					$href='href="informacion-usuario-desactivado.php"';
					$nombreBoton='VER MÁS INFORMACIÓN';
				}elseif($numregU  > 0){
					$palabraB1='Se encontró';
					$java='javascript:Imagen';
					$nombreBoton='VER DATOS';
					$incio='FELICIDADES! ';
					$color='#106303';
					$Noexist='Haz clic en ';
				}
				
				mysql_free_result($resultadoBuscarD);
				mysql_free_result($resultadoBuscar);
			?>
            <strong><a style="text-decoration:none; color:<?php echo $color;?>;"  ><?php echo $incio." "; ?></a></strong>El Usuario <?php echo $buscador." "; echo "<strong>".$palabraB1."</strong>";?>, <?php echo $Noexist;?>
            <a class="botonHack" <?php echo $href;?> onClick="<?php echo $java;?>('FO');"><strong style="color:#D85304;"><?php echo $nombreBoton; ?></strong></a>
            
            </section>
        </div>
		<!-- Banner -->
			<?php include "modulos/banner.php"; ?>

		<!-- Main -->
		<?php include "modulos/piepagina.php"; ?>

	</body>
</html>