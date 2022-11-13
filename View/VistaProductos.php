<?php
include ('../Controller/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compras</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <main>
    <h2 class="fw-300 centrar-texto">Productos En Venta</h2>
    <div class="contenedor-anuncios">
        

        <?php
$sql="SELECT * FROM productos";
$objConexion = new Conexion();
    $objConexion->abrirBd("localhost", "root", "", "compras", 3306);
    $result = $objConexion->ejecutarSelect($sql);
    $objConexion->cerrarBd();

while($mostrar=mysqli_fetch_array($result)){
        ?>

<div class="anuncio">
<img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>" alt="Anuncio" class="anuncioimg"/></td>
<div class="contenido-anuncio">
<h3><?php echo $mostrar['producto'] ?></h3>
<p><?php echo $mostrar['descripcion'] ?></p>
<ul class="iconos-caracteristicas">
    <li><img src="img/codigo.svg" alt="Precio"></li>
    <p class="precio">$<?php echo $mostrar['precio'] ?></p>
<li><img src="img/stock.svg" alt="Stock"></li>
<p><?php echo $mostrar['cantidad'] ?></p>
</ul>
<?php echo "<a href='Controller/recibir.php?codigo=".$mostrar['codigo']."&producto=".$mostrar['producto']. "' class='boton boton-amarillo d-block'>Agregar</a>" ?>
</div>
</div>
<?php
}
?>
    </div>
    <script src="Controller/JS/index.js"></script>
</main>
  </body>
</html>