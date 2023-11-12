<?php
$serverName = "DESKTOP-VTN7GIP\SSERVER";
$connectionOptions = array(
    "Database" => "BDAprL",
    "Uid" => "sa",
    "PWD" => "root"
);
// Establecer, verificar la conexión
$con = sqlsrv_connect($serverName, $connectionOptions);
?>

