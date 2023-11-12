<?php
    include("conexion.php");
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $query="INSERT INTO usuarios(nombre_usu,edad_usu) VALUES ('$nombre',$edad)";
    $res=sqlsrv_prepare($con,$query);
    if(sqlsrv_execute($res))
    {
        //echo "POSI POSI MI LONG";
        // Redirigir a una página web específica
        header("Location: http://127.0.0.1:5500/inicio.html");
        exit();
        //sqlsrv_close($res);
    } else{
        echo "Error al guardar los datos";
    }
?>