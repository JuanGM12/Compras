<?php 
 include('conexion.php');
 $nomusuario = $_POST['nomusuario'];
 $tipodocumento = $_POST['tipodocumento'];
 $nrodocumento = $_POST['nrodocumento'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $correo = $_POST['correo'];
 $clave = $_POST['clave'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 $fecha_nacimiento = $_POST['fecha_nacimiento'];

 $sql = "SELECT * from usuario where correo='" . $correo . "' OR nomusuario ='".$nomusuario."' OR nrodocumento = '".$nrodocumento."'";
    $objConexion = new Conexion();
    $objConexion->abrirBd("localhost", "root", "", "compras", 3306);
    $resultado = $objConexion->ejecutarSelect($sql);
    $objConexion->cerrarBd();

    if ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<script language='JavaScript'>
            alert ('Por favor revise los datos ingresados. \\n\\n1. Nombre de usuario ya está registrado. \\n2. El correo ya se encuentra registrado. \\n3. La cédula ya se encuentra registrada');
            location.href='../View/VistaCrearCuenta.php';
            </script>";
    } else{
 $sql= "INSERT INTO usuario(idrol, nomusuario, tipodocumento, nrodocumento, nombre, apellido, correo, clave, direccion, telefono, fecha_nacimiento) 
 VALUES ('1', '$nomusuario', '$tipodocumento' ,'$nrodocumento', '$nombre', '$apellido', '$correo','$clave','$direccion','$telefono','$fecha_nacimiento')";
 $objConexion = new Conexion();
        $objConexion->abrirBd("localhost","root","","compras", 3306);
        $result=$objConexion->ejecutarComandoSql($sql);
        $objConexion->cerrarBd();

 if($result){
 	echo "Usuario creado correctamente";
 } else{
 	echo "No se creó el usuario";
 }
}
?>