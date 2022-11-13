<?php
echo "<script src='Controller/JS/sesion.js'></script>";
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  echo "<h1>Bienvenido: $usuario</h1>";
} 

if (isset($_POST['btncerrar'])) {
  session_destroy();
  echo "<script>prueba();</script>";
}
?>