<?php
    class metodos{
        public function mostrarDatos($sql){
            $con = new conectar();
            $conexion =$con->conexion();

            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function insertarDatosNombres($datos){
            $con = new conectar();
            $conexion =$con->conexion();
            $sql="INSERT into t_persona (nombre,apellido)
                values ('$datos[0]','$datos[1]')";
            return $result= mysqli_query($conexion, $sql);
        }
    }
    
?>