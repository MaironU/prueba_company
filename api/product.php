<?php
    include "https://globalsystemcompany.herokuapp.com/controllers/ProductController.php";

    switch($_GET["m"]){
        case 'g':
            $product = array();

            if($_GET["id"]){
                $id = $_GET["id"];
                $product = productController::getProductForId($id);
                if($product){
                    echo json_encode(["success" => true, "data" => $product, "message"=> ""]);
                }
            }    
            break;
    }
?>
