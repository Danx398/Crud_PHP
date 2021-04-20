<?php
    class conectar{
        private $servidor="localhost:3307";
        private $usuario="root";
        private $bd="Crudpoo";
        private $password="";
        public function conexion(){
            $conexion = mysqli_connect($this->servidor,
                                        $this->usuario,
                                        $this->password,
                                        $this->bd);
        return $conexion;
        }
    }
?>      