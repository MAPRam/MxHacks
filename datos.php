<?php

require_once "database/connect.php";

$correo = $_POST["correo"];
$contra = $_POST["contrasenia"];
//$usuario = $_POST["user"];
//$fecha = $_POST["fecha"];
//$telefono = $_POST["telefono"];

$db = connecta();
//registra($correo, $contra, $usuario, $fecha, $telefono, $db);

$qry = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasenia = '$contra'";
$arr = mysqli_query($db, $qry);
$arr2 = mysqli_fetch_array($arr);
mysqli_close($db);

$mail = $arr2['correo'];
$pass = $arr2['contrasenia'];
$user = $arr2['usuario'];
$fech = $arr2['fecha_nacimiento'];

$dats = $mail . " " . $pass . " " . $user . " " . $fech;

echo "success";
//INSERT INTO usuarios(correo, contrasenia, usuario, fecha_nacimiento, telefono) VALUES("marcopascualr@outlook.com","frutyloop","Matogeno", 1996-02-25,2941108087)


 ?>
