<?php

require_once "database/connect.php";

$anio = $_POST['anio'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$km = $_POST['km'];
$precio = $_POST['precio'];

$db = conecta();

$qry1 = "SELECT counbt(*) FROM descripcion";
mysqli_query($db, $qry1);



mysqli_close($db);


function agrega($id, $anio, $modelo, $marca, $km, $precio, $db)
{
$query2 = "INSERT INTO descripcion(id, anio, modelo, marca, km, precio) VALUES('$id', '$anio', '$modelo', '$marca', '$km', '$precio')";
}

 ?>
