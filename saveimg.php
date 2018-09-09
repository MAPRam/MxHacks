<?php

$user = "Marco Antonio"; //$_POST['user'];
$password = "100%real"; //$_POST['password'];
$correo = "Maquinadelcodeo";//$_POST['correo'];

$hoy = getdate();
$day = $hoy['mday'];
$mes = $hoy['mon'];

$total = count($_FILES['subearchivo']['name']);

$nuevonombre = str_replace(" ", "_", $user);
$dia = $day;
$carpeta_destino = $mes . "-" . $dia . "-user:" . $nuevonombre;

mkdir($carpeta_destino);
chmod($carpeta_destino, 0777);

        for ($i=0; $i < $total ; $i++)
        {
            $tmpFilePath = $_FILES['subearchivo']['tmp_name'][$i];

            if ($tmpFilePath != "")
            {
                $fil = $carpeta_destino . "/" . $_FILES['subearchivo']['name'][$i];
                if (move_uploaded_file($tmpFilePath, $fil))
                {
                    chmod($fil, 0777);
                }

            }
        }
echo "success";


?>
