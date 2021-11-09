<?php
    include "/Applications/MAMP/htdocs/prueba_compamny/models/Product.php";

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
