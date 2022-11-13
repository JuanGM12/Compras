<?php
include ('conexion.php');
session_start();
if (isset($_SESSION['usuario'])) {
    header('location: ../index.php');
}
if (isset($_POST['enviar'])) {
    if (empty($_POST['usuario'] || empty($_POST['clave']))) {
        echo "<script language='JavaScript'>
        alert('El correo o la contraseña no han sido ingresadas');
        </script>";
    } else {
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $sql = "SELECT * FROM usuario WHERE nomusuario LIKE '".$usuario."' AND clave LIKE BINARY'".$clave."'";
        $objConexion = new Conexion();
        $objConexion->abrirBd("localhost", "root", "", "compras", 3306);
        $resultado = $objConexion->ejecutarSelect($sql);
        $objConexion->cerrarBd();
        if (!isset($_SESSION['usuario'])) {
            if ($fila = mysqli_fetch_assoc($resultado)) {
                $_SESSION['usuario'] = $usuario;
                echo "<script language='JavaScript'>
                location.assign('../index.php');
                </script>";
            } else {
                echo "<script language='JavaScript'>
                alert('El correo o la contraseña no son correctos.');
                </script>";
            }
        }
    }
}