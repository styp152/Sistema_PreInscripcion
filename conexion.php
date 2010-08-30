<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario=""; // aqui debes ingresar el nombre de usuario para acceder a la base 
$dbpassword=""; // password de acceso para el usuario de la linea anterior
$db="Inscripcion";        // Seleccionamos la base con la cual trabajar
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword)or die ("No fue posible efectuar la conexión...");
mysql_select_db($db, $conexion) or die ("No se pudo seccionar la base de datos...");
?>
