<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre=$_POST['txtname'];
    $apellido=$_POST['txtapellido'];
    $datos=array($nombre,$apellido);
    $obj= new metodos();
    if ($obj->insertarDatosNombres($datos)==1) {
        header("location: ../index.php");
    }else{
        echo "fallo al agregar";
    }


?>