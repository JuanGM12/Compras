<?php
if (isset($_SESSION['usuario'])) {
} else {
  echo "<script language='JavaScript'>
  alert ('Debes iniciar sesión para acceder a esta función.');
  location.assign('../index.php');
  </script>";
}
?>