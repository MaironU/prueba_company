<?php
    class Conexion
    {   
        public static function conectar(){
            try {
                include "/Applications/MAMP/htdocs/prueba_compamny/config/database.php";
                //$conexion = mysqli_connect($config["host"], $config["user"], $config["pass"], $config["database"]);

                $conexion = new PDO($config["driver"].":host=".$config["host"].";dbname=".$config["database"],$config["user"], $config["pass"]);
                return $conexion;
            }catch(PDOException $e) {
                die($e->getMessage());
            }
        }
    }
?>
