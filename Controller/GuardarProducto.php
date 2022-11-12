<?php 
 include('conexion.php');
 $producto = $_POST['producto'];
 $descripcion = $_POST['descripcion'];
 $precio = $_POST['precio'];
 $cantidad = $_POST['cantidad'];
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 $sql= "INSERT INTO productos(producto, descripcion, precio, cantidad, imagen) VALUES ('$producto', '$descripcion' ,'$precio', '$cantidad', '$imagen')";
 $result = mysqli_query($conn, $sql);

 if($result){
 	echo "Producto creado correctamente";
 } else{
 	echo "No se insertó el producto";
 }
?>