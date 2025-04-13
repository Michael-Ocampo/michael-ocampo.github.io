<?php
$servername = "SRV-NOMINA";
$connectionInfo = array("Database"=>"Autoservicios", "UID"=>"sa-nomina", "PWD"=>"PisXE%Z$", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect($servername, $connectionInfo);


/*
$ArtCliente = $_POST["ArticuloClienteWM"];
$ArtSAP = $_POST["ArticuloSAPWM"];
$DesArt = $_POST["DescripcionWM"];
$UnidadCom = $_POST["UnidadWM"];
$GrupoArt = $_POST["GrupoWM"];

$query= "INSERT INTO Productos(CodigoSAP,CodigoCliente,Descripcion,UnidadVenta,Grupo) VALUES('$ArtCliente','$ArtSAP','$DesArt','$UnidadCom','$GrupoArt')";
$res= sqlsrv_prepare($conn, $query);

if(sqlsrv_execute($res)){
    echo"Agregado correctamente";
    }
    else
    {
    echo"No Agregado";
    }
    */
?>