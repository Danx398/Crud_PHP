<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>

<body>
    <form action="procesos/insertar.php" method="POST">
        <label>Nombre</label>
        <p></p>
        <input type="text" name="txtname">
        <p></p>
        <label>Apellido</label>
        <p></p>
        <input type="text" name="txtapellido">
        <p></p>
        <button>Agregar</button>
    </form>
    <br><br>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <?php
            $obj = new metodos();
            $sql="SELECT id,nombre,apellido from t_persona";
            $datos=$obj->mostrarDatos($sql);
            foreach($datos as $key){
        ?>
        <tr>
            <td><?php echo $key['nombre'];?></td>
            <td><?php echo $key['apellido'];?></td>
        </tr>
        <?php
            }   
        ?>
    </table>
</body>

</html>