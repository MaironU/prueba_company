<?php
    class Conexion
    {   
        public static function conectar(){
            try {
                $config = array(
                    "driver"    =>"mysql",
                    "host"      =>"us-cdbr-east-04.cleardb.com",
                    "user"      =>"bbc7bf2e384ceb",
                    "pass"      =>"f7f274a3",
                    "database"  =>"heroku_d0e1b90d9a45322"
                );
                //$conexion = mysqli_connect($config["host"], $config["user"], $config["pass"], $config["database"]);

                $conexion = new PDO($config["driver"].":host=".$config["host"].";dbname=".$config["database"],$config["user"], $config["pass"]);
                return $conexion;
            }catch(PDOException $e) {
                die($e->getMessage());
            }
        }
    }
?>
