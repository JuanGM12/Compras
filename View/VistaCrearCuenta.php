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
    <form action="../Controller/ControlCuenta.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nomusuario" placeholder="Usuario: " value="" required/>
        <input type="text" name="tipodocumento" placeholder="Tipo de Documento: " value="" required/>
        <input type="text" name="nrodocumento" placeholder="Numero de Documento: " value="" required/>
        <input type="text" name="nombre" placeholder="Nombre: " value="" required/>
        <input type="text" name="apellido" placeholder="Apellidos: " value="" required/>
        <input type="email" name="correo" placeholder="Correo: " value="" required/>
        <input type="password" name="clave" placeholder="Clave: " value="" required/>
        <input type="address" name="direccion" placeholder="Dirección: " value="" required/>
        <input type="phone" name="telefono" placeholder="Telefono: " value="" required/>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento: " value="" required/>
        <input type="submit" value="Aceptar"/>
    </form>
</body>
</html>