<?php
    require_once "../models/Product.php";

    switch($_GET["m"]){
        case 'g':
            $product = array();

            if($_GET["id"]){
                $id = $_GET["id"];
                $product = Product::getProductForId($id);
                if($product){
                    echo json_encode(["success" => true, "data" => $product, "message"=> ""]);
                }
            }    
            break;
    }
?>
