<?php 
 include('conexion.php');
 $producto = $_POST['producto'];
 $descripcion = $_POST['descripcion'];
 $precio = $_POST['precio'];
 $cantidad = $_POST['cantidad'];
 $idcategoria = $_POST['idcategoria'];
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 $sql= "INSERT INTO productos(producto, descripcion, precio, cantidad, idcategoria, imagen) VALUES ('$producto', '$descripcion' ,'$precio', '$cantidad', '$idcategoria','$imagen')";
 $objConexion = new Conexion();
        $objConexion->abrirBd("localhost","root","","compras", 3306);
        $result=$objConexion->ejecutarComandoSql($sql);
        $objConexion->cerrarBd();

 if($result){
 	echo "Producto creado correctamente";
 } else{
 	echo "No se insertó el producto";
 }
?>