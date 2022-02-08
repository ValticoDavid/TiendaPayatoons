<html>

<head>
    <meta charset="UTF-8">
    <title>Tienda Payatoons</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- <script type="module" src="/js/addProductos.js"></script> -->

</head>

<body>
    <header>
        <div class="overlay">
            <nav class="navbar navbar-dark bg-dark">
                <h2>Tienda Payatoons</h2>
                <ul>
                    <li class="cart">
                        <a href="cart.php">
                            <ion-icon name="cart-outline"></ion-icon>
                            <ion-ion name="basket"></ion-ion>
                            <?php if(isset($_COOKIE['numItem'])){ ?>
                                <span><?php echo $_COOKIE['numItem']; ?></span>
                            <?php }else{ ?>
                                <span>0</span>
                            <?php } ?>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>


    <main>
        <!-- SE AGREGA ID listado_Productos -->
        <div class="products" id="listado_Productos">
            <div class="container">
                <div class="product-items">
                    <!---->
                    <!-- Start Box Container-->

                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/DJ.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="1"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso DJ</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre" class="talla_Hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Suave.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="2"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso Suave</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Staff.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="3"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera de Staff</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->
                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Excer.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="4"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso Excer</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Fans.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="5"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera de Fans</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Fercho.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="6"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso Fercho</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/GAMA.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="7"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso GAMA</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Josh.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="8"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera del Payaso Josh</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/Luigui_Productor.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="9"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Playera de Luigui Productor</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->
                    <!---->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/mfans.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="10"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter de mujer de fans</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->
                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_DJ.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="11"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso DJ</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Excer.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="12"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso Excer</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Fercho.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="13"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso Fercho</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_GAMA.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="14"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso GAMA</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Josh.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="15"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso Josh</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Luigui_Productor.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="16"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter de Luigui Productor</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Staff.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="17"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Staff</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/S_Suave.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="18"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter del Payaso Suave</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre" class="talla_Hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->

                    <!--Sueteres-->
                    <!-- Start Box Container-->
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="imagenes/sfans.jpeg" alt="product image">
                            </div>
                            <div class="product-btns">
                                <button type="button" class="btn-cart" data-id="19"> agregar al carrito
                                </button>
                                <button type="button" class="btn-buy"> comprar
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4>Sueter de hombre fans</h4>
                            <!--Drop down to choose sizes for men-->
                            <label for="talla_hombre">Escoje la talla para hombre:</label>
                            <select name="talla_hombre" id="talla_hombre" class="talla_Hombre">
                                <option value="">Selecciona la talla</option>
                                <option value="XCH">XCH</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for woman-->
                            <label for="talla_mujer">Escoje la talla para mujer:</label>
                            <select name="talla_mujer" id="talla_mujer">
                                <option value="">Selecciona la talla</option>
                                <option value="CH">CH</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                            </select>
                            <!--End of sizes options-->
                            <!--Drop down to choose sizes for kids-->
                            <label for="talla_nn">Escoje la talla para niño y niña:</label>
                            <select name="talla_nn" id="talla_nn">
                                <option value="">Selecciona la talla</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                            </select>
                            <!--End of sizes options-->
                            <p class="product-price">$ 200.00</p>
                        </div>
                    </div>
                    <!--Final box container-->
                </div>
            </div>
        </div>

    </main>
</body>
<script src="js/main.js"></script>
<script type="module" src="/js/addProductos.js"></script>

</html>