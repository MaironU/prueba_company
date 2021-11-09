<?php
    require_once "models/Product.php";

    class productController
    {
        public static function getProducts(){
            return Product::getProducts();
        }

        public static function getProductForId($id){
            return Product::getProductForId($id);
        }
    }
?>
