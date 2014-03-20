<?php
	session_start();

	if(!isset($_SESSION['contador'])){$_SESSION['contador'] =0;}
	?>

	<!doctype html>
	<html lang = "es">
		<head>
			<title> Candles with Buzz </title>
			<link rel = Stylesheet href = "css/movil.css" media = 'screen and (min.width: 1px) and (max-width: 800px)'>
			<link rel = Stylesheet href = "css/pcmac.css" media = 'screen and (min-width: 801px) and (max-width: 4000px)'>
			<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
			<script type = "text/javascript" src = "js/jquery.js"></script>
			<script type = "text/javascript" src = "js/codigo.js"></script>
		</head>

		<body>

			<div id = "contenedor">
				<header>
					<a href = "index.php"><h1> Candles with Buzz </h1></a>

					<ul id = "menu">
						<li> Home </li>
						<li> News </li>
						<li> Contact </li>
						<li> About </li>
					</ul>
					
				</header>

				<section>
						<div id = "contienecarrito">
						<div id = "carrito"
							<div id = "carrito" style = "background:rgb(200,200,200); color: black;">
						</div>

					<a href = 'php/destruir.php'><button> Vaciar Carrito </button></a>
					<a href = 'confirmar.php'><button> Confirmar Compra </button></a>
				</div>