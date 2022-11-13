<?php 
class ControlProducto {

       var $objProducto;

       function __construct($objProducto){
        $this->objProducto = $objProducto;
       }

       function guardar(){

       $producto = $this->objProducto->getproducto();
       $descripcion = $this->objProducto->getdescripcion();
       $precio = $this->objProducto->getprecio();
       $cantidad = $this->objProducto->getcantidad();
       $idcategoria = $this->objProducto->getidcategoria();
       $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

       $sql= "INSERT INTO productos(producto, descripcion, precio, cantidad, idcategoria, imagen) 
       VALUES ('$producto', '$descripcion' ,'$precio', '$cantidad', '$idcategoria','$imagen')";
       $objConexion = new Conexion();
       $objConexion->abrirBd("localhost","root","","compras", 3306);
       $result=$objConexion->ejecutarComandoSql($sql);
       $objConexion->cerrarBd();

       if($result){
              echo "Producto creado correctamente";
       } else{
              echo "No se insertó el producto";
       }
       }
}
?>