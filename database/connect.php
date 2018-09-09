<?php

function connecta()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mxhacks";

    $conn = mysqli_connect($server, $user, $password);

    if (!$conn)
    {
        //echo json_encode("error");
    }
    else
    {
        $db = mysqli_select_db($conn, $dbname) or die ("Algo pasó papu") ;
        return $conn;
    }

}


function registra($correo, $contrasenia, $usuario, $fecha, $telefono, $db)
{
    $qry = "INSERT INTO usuarios(correo, contrasenia, usuario, fecha_nacimiento, telefono) VALUES('$correo', '$contrasenia', '$usuario', '$fecha', '$telefono')";
    mysqli_query($db, $qry);
    echo "success";

}


?>
