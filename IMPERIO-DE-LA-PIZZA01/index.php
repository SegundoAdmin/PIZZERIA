
<!DOCTYPE html>
<html>
<head>
	<title>El Imperio de la Pizza</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
	<link rel="stylesheet" type="text/css" href="src/css/carrusel.css">
	<link rel="stylesheet" type="text/css" href="src/css/division.css">
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/carta.css">
	<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/imperio.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	 

</head>
<?php
$ruta="";
?>

<body>

	<header class="cabecera">
		<div class="logo">

		<img src="src/img/pizza.png">
		
		</div>

		<div class="menu">
		  <nav class="navegador">
		  	<ul class="ul">
		  		<li class="li"><a href="index.php">Inicio</a></li>
		  		<li class="li"><a href="Nosotros.php">Sobre Nosotros</a></li>
		  		<li class="li"><a href="carta.php">Nuestra Carta</a></li>
		  		<li class="li"><a href="localizacion.php">Localizacion</a></li>
		  		<li class="li"><a href="">Venta Online</a></li>
		  	</ul>
		  </nav>
			
		</div>
	</header>

	<section>
	<div class="ct">
	 <div class="carrusel">

	    <img id="1" class="imgcarrusel" src="src/img/slide-0.png">
	    <img id="2" class="imgcarrusel" src="src/img/slide-1.png">
	    <img id="3" class="imgcarrusel" src="src/img/slide-2.png">

		  <div class="flechas">
		     <div class="Izquierda">
		     <a class="btnMover" id="flechaIzquierda"><img src="src/img/flechaIzquierda.png"></a>
		     </div>

		     <div class="Derecha">
		     <a class="btnMover" id="flechaDerecha" ><img src="src/img/flechaDerecha.png"></a>
		     </div>
		   </div>
      </div>
     
     <div class="to">
      <div class="iconof">

        <a href="https://www.facebook.com/luisito.lozacasta?fref=ts"><img src="src/img/iconofacebook.png"></a>
        
      </div>

      <div class="telefono">
        <p>Teléfono:</p>
        <p>2 2732 1060</p>
     </div>
     </div>

      </div>


	<div class="divisionOferta">
		<h2 align="center" class="oferta">Ofertas</h2>
	</div>


	<div class="divisiontotal">

		<div class="division1">
		<p >Pizza Familiar + Bebida </p>
		<p> $8.000</p>
		<img src="src/img/pizzacuadrada2.png">
		</div>	

		<div class="division2">
		<p>2 Pizza Familiar + Bebida</p>
		<p> $12.000</p>
		<img src="src/img/pizzaFamiliarpromo2.png">
		</div>
	</div>
	</section>
	


	<footer class="footer">
	<div class="pie" align="center">
	<br>
	<br>
	<a href="carta.php">.Nuestra Carta</a><br>
	<a href="https://www.facebook.com/luisito.lozacasta?fref=ts">.Síguenos en Facebook</a><br>
	<a href="Nosotros.php">.Conócenos </a>
	</div>
		
	</footer>




</body>
</html>
