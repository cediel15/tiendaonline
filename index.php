<?php include "php/cabecera.php"?>
	<?php
		$conexion = mysqli_connect("localhost", "tienda", "luispipe001", "tiendaonline");

		mysqli_set_charset($conexion, "utf8");

		$peticion = "SELECT * FROM productos WHERE stock > 0";
		$resultado = mysqli_query($conexion, $peticion);

		while($fila = mysqli_fetch_array($resultado))
		{
			echo "<article class = titulo>";

			$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = " .$fila['id']." LIMIT 1";
			$resultado2 = mysqli_query($conexion, $peticion2);

			while($fila2 = mysqli_fetch_array($resultado2))
			{
				echo "<img src = 'photo/".$fila2['imagen']."' width=200px>";
				echo "<a href='producto.php?id=" .$fila['id']. "'> <h3>" .$fila['nombre']. "</h3> </a>";
				echo "<p>" .$fila['descripcion']. "</p>";
				echo "<p>Precio: " .$fila['precio']. " USD</p>";
			}

			echo "<br>";

			echo "<a href='producto.php?id=".$fila['id']."'><button> Más Información </button></a>";	
			echo "<button value = '".$fila['id']."' class='botoncompra'> Comprar Ahora </button>";

			echo "<br>";
			echo "<br>";
			echo "</article>";
		}

		mysqli_close($conexion);
	?>
<?php include "php/piedepagina.php" ?>