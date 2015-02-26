<!DOCTYPE HTML>
<html lang="es" class="no-js">
<head manifest="/manifiesto/manifiesto.cache">
	<meta charset="UTF-8">
	<title>Weblog Andres F. Barrera V.</title>
	<meta name="descripcion" content="Weblog Andres F. Barrera V.">
	<meta name="keywords" content="weblog, blog, Andres Felipe Barrera Velasquez, diseño, web">
	<link rel="stylesheet" href="../css/estilo.css" type="text/css">
	<script type="text/javascript"></script>
</head>
<body>
	<div id="cajaheader">

	</div>
	<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
		<header>
			<div id="logo">
				<img src="../img/logoMetallica.png" alt="logoMetallica" width="80px" height="80px">
			</div>
			<div id="tipo">
			<h1><span itemprop="name">Andres Felipe Barrera Velasquez</span></h1>
			<h2><span itemprop="title">Programador y Diseñador Web</span></h2>
			</div>
			<nav>
				<ul>
					<li><a href="../index.html"><canvas id="iconoinicio" width="50" height="50"></canvas><br/>Inicio</a></li>
					<li><a href="../noticias.html"><canvas id="icononoticias" width="50" height="50"></canvas><br/>Noticias</a></li>
					<li><a href="../sobremi.html"><canvas id="iconosobreMi" width="50" height="50"></canvas><br/>Sobre mi</a></li>
					<li><a href="../contacto.html"><canvas id="iconocontacto" width="50" height="50"></canvas><br/>Contacto</a></li>
				</ul>
			</nav>
		</header>
		<div id="contenido">
			<?php
				// REcibo las variables del formulario
				$nombre  = $_POST['nombre'];
				$mail 	 = $_POST['email'];
				$mensaje = $_POST['mensaje'];
				// Te muestro las variables
				echo "<h3>El mensaje que has enviado es: </h3>";
				echo "<br/>";
				echo "<p>Nombre: ";
				echo $nombre;
				echo "<br/>";
				echo "Email: ";
				echo $mail;
				echo "<br/>";
				echo "Mensaje: ";
				echo $mensaje;
				echo "</p>";

				// Envio un email
				/*$aquien = "andresfelipeman@gmail.com";
				$asunto = "Has recibido un correo del Blog.";
				$mensajemail = $nombre." con el Email ".$mail." con el mensaje ".$mensaje;
				if (mail($aquien,$asunto,$mensajemail))
				{
					echo "Tu email se ha enviado Correctamente";
				}
				else
				{
					echo "Tu email ha fallado";
				}*/
			?>
		</div>
		<footer>
			<h6>
				<div class="vcard">
					<div><span class="name">Andres Felipe Barrera Velasquez</span>--<span class="locality">Bogotá</span>--<span class="region">Colombia--</span><span class="country-name">Colombia</span></div>
					<div><span class="tel">320 413 58 43</span>--<span class="email">afbarrerav@hotmail.com</span></div>
				</div>
			</h6>
			<script type="text/javascript">
			//si existe localStorage
				if (localStorage.pagecount)
				{
					localStorage.pagecount = Number(localStorage.pagecount)+1;
				}
				else
				{
					localStorage.pagecount = 1;
				}
				//Escribimos el contador de visitas
				document.write("Has visitado mi pagina "+ localStorage.pagecount + " veces.");
			</script>
			<script type="text/javascript">
				if (sessionStorage.pagecount)
				{
					sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;
				}
				else
				{
					sessionStorage.pagecount = 1;
				}
				document.write("En esta sesion has visitado mi pagina : "+sessionStorage.pagecount + " veces.")
			</script>
		</footer>
	</div>
</body>
</html>
<script type="text/javascript">
	var micolor = "Black";
	var miOtroColor = "darkgray";
	var miTercerColor = "White";
	var escala = 0.5;
	// establecemos variable con el id de canvas
	var c=document.getElementById("iconosobreMi");
	// especificamos el contexto del dibujo 2d
	var cxt=c.getContext("2d");

	//dibujar con tinta negra
	cxt.fillStyle=(micolor);
	//arranca reccorrido
	cxt.beginPath();
	//dibuja un arco empieza en la linea x50 Y25, radio de 20 y va desde el angulo 0 hasta PI*2 que quiere decir un circulo, true valor completo del circulo
	cxt.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true);
	//cierra la forma
	cxt.closePath;
	//rellena con el color seleccionado
	cxt.fill();

	
	cxt.fillStyle=(micolor);
	
	cxt.beginPath();
	cxt.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//CANVAS DE CONTACTO
	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	
	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(miOtroColor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	
	cxt.fillStyle=(miOtroColor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//CANVAS DE INICIO
	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(miTercerColor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	//CANVAS DE NOTICIAS
	var c=document.getElementById("icononoticias");
	var cxt=c.getContext("2d");


	cxt.fillStyle=(micolor);

	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	
	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();
</script>