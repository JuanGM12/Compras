<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/GuardarProducto.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="producto" placeholder="Producto: " value="" required/>
        <input type="text" name="descripcion" placeholder="Descripción: " value="" required/>
        <input type="text" name="precio" placeholder="Precio: " value="" required/>
        <input type="text" name="cantidad" placeholder="Cantidad: " value="" required/>
        <input type="text" name="idcategoria" placeholder="Categoria: " value="" required/>
        <input type="file" name="imagen" required/>
        <input type="submit" value="Aceptar"/>
    </form>
</body>
</html>