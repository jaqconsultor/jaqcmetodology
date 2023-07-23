<?php

$conexion = new mysqli("localhost", "lrvl-web72", "lrvl-web72", "lrvl-web72");

global $dbdata;
$dbdata = $conexion;

if ($db -> connect_errno) {
		echo "<font color='red'><center>
		En este momento no es posible establecer una comunicaci�n 
		con el servidor, <br>intente mas tarde</center></font>"; 
}

?>
