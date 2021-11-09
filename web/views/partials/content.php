<?php 
        include "../../controllers/ProductController.php";
        $products = ProductController::getProducts();
    ?>
    
    <main class="main">
        <div class="content p-4 w-100 m-0">
            <div class="row justify-content-between flex-nowrap m-0 h-67 content__2">
                <section class="content__car d-flex flex-column justify-content-between col-12 col-lg-4">
                    <div class="content__car-max">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th>CANTIDAD</th>
                                    <th>PRODUCTO</th>
                                    <th>TAX</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody id="body_products">
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="content__car--footer">
                        <h5 class="content__car--footer-total">TOTAL</h5>
                        <h5 class="content__car--footer-totalnum" id="total">0.00</h5>
                    </div>
                </section>

                <section class="content__options  col-12 col-lg-8 row">
                    <div class="d-flex justify-content-between h-15">
                        <div class="content__options-ul">
                            <ul class="m-0 p-0">
                                <li class="active">
                                    <a href="">
                                        <span>BEBIDAS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>COMIDAS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>
                                            REPOSTERÍA Y PANADERÍA
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>
                                            REFRIGERADOS
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img class="mt-2" src="<?php echo $ruta ?>/imgs/icons/options_content.png" alt="" width="25px">
                        </div>
                    </div>
                    <div class="content__products row px-4 h-85">
                        <?php foreach ($products as $product) {?>
                            <div class="content__products-card col-lg-4 col-xl-3 col-md-4 col-sm-6 col-6" data-id="<?php echo $product["id"] ?>">
                                <img src="<?php echo $ruta ?>/imgs/products/<?php echo $product["image"] ?>" alt="">
                                <div class="d-flex flex-column mt-1">
                                    <span><?php echo $product["name"] ?></span>
                                    <span><?php echo $product["price"] ?> CAD</span>
                                </div>
                            </div>
                        <?php }?>
                        <div class="content__products-card col-3">
                            <img src="<?php echo $ruta ?>/imgs/icons/arrow.png" alt="">
                        </div>
                    </div>
                </section>
            </div>
            <div class="content__down row justify-content-between h-33 m-0">
                <div class="content__down-1 col-lg-4 col-md-12">
                    <div class="d-flex row justify-content-between h-45 w-4 content__down-1-car">
                        <div class="col-6 d-flex justify-content-center align-items-center text-center discount">
                            DESCUENTO EMPLEADOS
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center discount">
                            VISTA CLIENTES
                        </div>
                    </div>
                    <div class="d-flex row justify-content-between h-45">
                        <div class="w-100 discount row justify-content-center align-items-center">
                            CODIGO PROMOCIONAL
                        </div>
                    </div>
                </div>
                <div class="content__down-2 d-flex p-0 col-lg-8 col-md-12 row justify-content-between h-40">
                    <div class="content__down-2-methodspay d-flex flex-wrap justify-content-between">
                        <div>
                            <img width="80px" src="<?php echo $ruta ?>/imgs/icons/pngwing.com.png" alt="">
                        </div>
                        <div>
                            <img width="80px" src="<?php echo $ruta ?>/imgs/icons/visa.png" alt="">
                        </div>
                        <div>
                            <img width="80px" src="<?php echo $ruta ?>/imgs/icons/pngwing.com.png" alt="">
                        </div>
                        <div>
                            <img width="80px" src="<?php echo $ruta ?>/imgs/icons/uber-eats.jpg" alt="">
                        </div>
                        <div>
                            <img width="80px" src="<?php echo $ruta ?>/imgs/icons/pngwing.com.png" alt="">
                        </div>
                        <div class="font-lg">
                            +
                        </div>
                    </div>
                    <div class="content__down-2__pay pointer" id="pay">
                        PAGAR
                    </div>
                </div>
            </div>
        </div> 
    </main>
</div>