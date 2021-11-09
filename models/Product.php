<?php
    require_once "https://globalsystemcompany.herokuapp.com/models/Conexion.php";

    class Product
    {
        private static $conexion;
        private static $products = array();

        public static function getConexion(){
            self::$conexion = Conexion::conectar();
        }

        public static function getProducts(){
            self::getConexion();
            $query = "SELECT id, name, price, image FROM products";

            $resultado = self::$conexion->prepare($query);
            $resultado->execute();

            while ($fila = $resultado->fetch()) {
                self::$products[]=$fila;
            }     

            return self::$products;
        }

        public static function getProductForId($id){
            self::getConexion();
            $query = "SELECT * FROM products WHERE id = :id";

            $resultado = self::$conexion->prepare($query);
            $resultado->bindValue(":id", $id);

            $resultado->execute();
            $product = $resultado->fetch(PDO::FETCH_ASSOC);
            return $product;
        }
    }
?>
