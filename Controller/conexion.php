<?php

class Conexion
{

	var $conn;
	function __construct()
	{
		$this->conn;
	}
	function abrirBd($servidor, $usuario, $password, $db, $puerto)
	{
		try {
			$this->conn = new mysqli($servidor, $usuario, $password, $db, $puerto);
			if ($this->conn->connect_errno) {
				printf("Connect failed: %s\n", $this->conn->connect_error);
				exit();
			}
		} catch (Exception $e) {
			echo "ERROR AL CONECTARSE AL SERVIDOR " . $e->getMessage() . "\n";
		}
	}

	function cerrarBd()
	{
		try {
			$this->conn->close();
		} catch (Exception $e) {
			echo "ERROR AL CONECTARSE AL SERVIDOR " . $e->getMessage() . "\n";
		}
	}

	function ejecutarComandoSql($sql)
	{
		try {
			$resultado = $this->conn->query($sql);
		} catch (Exception $e) {
			echo " NO SE AFECTARON LOS REGISTROS: " . $e->getMessage() . "\n";
		}
		return $resultado;
	}

	function ejecutarSelect($sql)
	{
		try {
			$recordSet = $this->conn->query($sql);
		} catch (Exception $e) {
			echo " ERROR: " . $e->getMessage() . "\n";
		}
		return $recordSet;
	}
}

?>
