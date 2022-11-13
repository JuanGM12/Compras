<?php
    include('../Controller/ControlInicioSesion.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compras</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Inicio.css">
  </head>
  <body>
  <nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fa-solid fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fa-solid fa-circle-xmark"></i></button>
		</div> 

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los <span>Departamentos</span></p>
				<i class="fa-solid fa-caret-down"></i>
			</div>

			<div class="enlaces">
				<a href="VistaCrearCuenta.php">Crea Tu Cuenta</a>
				<a href="VistaIniciarSesion.php">Ingresa</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorías</h3>

					<a href="#" data-categoria="tecnologia-y-computadores">Tecnología y Computadores <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="libros">Libros <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="salud-y-belleza">Salud y Belleza <i class="fa-solid fa-angle-right"></i></a>
					<a href="#" data-categoria="alimentos-y-bebidas">Alimentos y Bebidas <i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="contenedor-subcategorias">
					<div class="subcategoria activo" data-categoria="tecnologia-y-computadores">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Tecnología y Computadores</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/tecnologia-banner-1.png" alt="Banner Tecnología">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/tecnologia-galeria-1.png" alt="Galeria 1 Tecnología">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-2.png" alt="Galeria 2 Tecnología">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-3.png" alt="Galeria 3 Tecnología">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-4.png" alt="Galeria 4 Tecnología">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="libros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Libros</h3>
							<a href="#">Top Sellers</a>
							<a href="#">Ciencia Ficción</a>
							<a href="#">Fantasía</a>
							<a href="#">Miedo</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/libros-banner-1.png" alt="Banner Libros">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/libros-galeria-1.png" alt="Galeria 1 Libros">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-2.png" alt="Galeria 2 Libros">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-3.png" alt="Galeria 3 Libros">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-4.png" alt="Galeria 4 Libros">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="ropa-y-accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Ropa y Accesorios</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/ropa-banner-1.png" alt="Banner Ropa">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/ropa-galeria-1.png" alt="Galeria 1 Ropa">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-2.png" alt="Galeria 2 Ropa">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-3.png" alt="Galeria 3 Ropa">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-4.png" alt="Galeria 4 Ropa">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="hogar-y-cocina">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Hogar y Cocina</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/hogar-banner-1.png" alt="Banner hogar">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/hogar-galeria-1.png" alt="Galeria 1 hogar">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-2.png" alt="Galeria 2 hogar">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-3.png" alt="Galeria 3 hogar">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-4.png" alt="Galeria 4 hogar">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="juegos-y-juguetes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Juegos y Juguetes</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/juegos-banner-1.png" alt="Banner juegos">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/juegos-galeria-1.png" alt="Galeria 1 juegos">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-2.png" alt="Galeria 2 juegos">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-3.png" alt="Galeria 3 juegos">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-4.png" alt="Galeria 4 juegos">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="salud-y-belleza">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Salud y Belleza</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/belleza-banner-1.png" alt="Banner belleza">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/belleza-galeria-1.png" alt="Galeria 1 belleza">
							</a>
							<a href="#">
								<img src="../img/belleza-galeria-2.png" alt="Galeria 2 belleza">
							</a>
							<a href="#">
								<img src="../img/belleza-galeria-3.png" alt="Galeria 3 belleza">
							</a>
							<a href="#">
								<img src="../img/belleza-galeria-4.png" alt="Galeria 4 belleza">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="alimentos-y-bebidas">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fa-solid fa-arrow-left"></i> Regresar</button> 
							<h3 class="subtitulo">Alimentos y Bebidas</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadores de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>
						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/comida-banner-1.png" alt="Banner comida">
							</a>
						</div>
						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/comida-galeria-1.png" alt="Galeria 1 comida">
							</a>
							<a href="#">
								<img src="../img/comida-galeria-2.png" alt="Galeria 2 comida">
							</a>
							<a href="#">
								<img src="../img/comida-galeria-3.png" alt="Galeria 3 comida">
							</a>
							<a href="#">
								<img src="../img/comida-galeria-4.png" alt="Galeria 4 comida">
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</nav>
	<div>  	
			<div>
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<input type="text" name="usuario" placeholder="Usuario" required="">
					<input type="password" name="clave" placeholder="Clave" required="">
					<button name="enviar">Iniciar</button>
				</form>
			</div>
	</div>
	<script src="https://kit.fontawesome.com/698a8bb157.js" crossorigin="anonymous"></script>
	<script src="../Controller/JS/main.js"></script>
</body>
</html>