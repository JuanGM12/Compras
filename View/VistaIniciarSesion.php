<?php
    include('../Controller/ControlInicioSesion.php')
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
	<div>  	
			<div>
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<input type="text" name="usuario" placeholder="Usuario" required="">
					<input type="password" name="clave" placeholder="Clave" required="">
					<button name="enviar">Iniciar</button>
				</form>
			</div>
	</div>

</body>
</html>