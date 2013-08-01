<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>radio</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
 <header>
 	<div id="asd">
 	<h1>La Radio de Casa</h1>
 	<nav>
 		<ul>
 			<li class="acti">inicio</li>
 			<li>canales</li>
 			<li>canciones</li>
 			<li>contacto</li>
 		</ul>
 	</nav></div>
</header>
<section id="izq">
	<article class="qw">
		<h2>top las mas pedidas</h2>
		<div id="TopLis">
			<ul>
				<?php 
				include 'db.php';
				$ls="select * from liscanciones;";
				$list=pg_query($conn , $ls);
				if(!$list){
					echo $ls;
				}
				while ($row=pg_fetch_assoc($list)) {
					$nombre=$row['nombre'];
					$autor=$row['autor'];
					$genero=$row['genero'];
					echo "<li>".$nombre."</li>";
				}
				?>
			</ul>
		</div>
		<span>Lista de canciones en mas popularidad</span>
	</article>
	<article class="as">
		<h2>top de canales</h2>
		<div id="TopLis">
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li>7</li>
			</ul>
		</div>
		<span>podras ver las mejores estaciones de radio</span>
	</article>
</section>


<section id="der">
	<article>
		<span>reproductor</span>
  		<div id="rp">
  			<div id="lfmenu">
  				<ul><span>horarios</span>
  					<li>la caliente</li>
  					<li>rockarola</li>
  					<li>la viejitas</li>
  					<li>sonidero</li>
  					<li>cumbias para recordar</li>
  					<li>la tremenda corte</li>
  				</ul>
  			</div>
  			<div id="rgmarco">
  				<div id="rola"><div id="imgmp3">imagen nose </div><div id="datos">datos de la cancion</div></div>
  				<div id="listmp3"><span>lista de canciones</span>
  					<ul>
  						<li></li>
  						<li></li>
  						<li></li>
  						<li></li>
  						<li></li>
  					</ul>
  				</div>
  			</div>
  			<div id="controles">
  				<span>nombre cancion</span>
  				<div>controles</div>
  			</div>
  		</idv>
	</article>
	<article>
		<span>chat</span>
		<div id="chat">
			<div><br>as mensajes</div>
			<div><br>conectaos</div>
			<div><br>dejar mensaje aqui</div>
		</div>
		<span>contacta a los locutores y has tus pedidos por este medio </span>
	</article>
</section>



<footer>
<span>esto es le pie hast aabajo</span>
</footer>
</body>
</html>