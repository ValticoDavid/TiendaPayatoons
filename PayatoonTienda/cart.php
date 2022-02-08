<html>

<head>
    <meta charset="UTF-8">
    <title>Tienda Payatoons</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--ESTILOS CARRITO DE COMPRA-->
    <link rel="stylesheet" href="/styles/cart.css">



    <!-- SCRIPTS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/ec43832391.js" crossorigin="anonymous"></script>

    <!-- <script type="module" src="/js/addProductos.js"></script> -->

</head>

<body>
    <!-- Contenedor de la lita del carrito -->
    <div class="lista_Contendor">
        <h1>Lista de tu Payacarrito</h1>
    </div>

    <!-- Tabla con la lista del carrito -->
    <div class="tabla_Lista_Carrito" id="carrito">
        <!-- TABLA -->
        <table id="lista_Carrito">
            <!-- ENCABEZADO DE TABLA -->
            <thead>
                <!-- FILA -->
                <tr>
                    <!-- COLUMNAS -->
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Talla</td>
                    <td>H/M/N</td>
                    <td>Precio</td>
                </tr>
            </thead>
            <!-- En este "tbody" se alamcenara la lista del carrito -->
            <tbody id="lista_Carrito">
            <?php 
                foreach($_COOKIE as $lista){
                    $producto = explode(",",$lista);
                    if($producto[0]=="cart"){
                        ?>
                        <tr>
                            <td><img src="<?php echo $producto[4]; ?>" width="170px"></td>
                            <td><?php echo $producto[5]; ?></td>
                            <td>Talla: <?php echo $producto[1]; ?></td>
                            <td><?php echo $producto[7]; ?></td>
                            <td class="precioItem"><?php echo $producto[6]; ?></td>
                            <td><i class="fas fa-window-close deleteItem" data="<?php echo $producto[8]; ?>"></i></td>
                        </tr>

                        <?php
                    }
                }
            ?>
                
            </tbody>
        </table>

        <div class="contenedorTotal">
            <h4 id="totalPago">Total a pagar</h4>
        </div>

        <!-- Este boton limpia la lista del carrito -->
        <a href="#" id="limpiar_Carrito" class="btn-Limpiar-Carrito">Limpiar payacarrito</a>
    </div>

    <!-- Contenedor de botnes -->
    <div class="contenedor_Botones">
        <!-- Este enlace regresa a la tienda -->
        <a href="/index.php" class="btn-regresoTienda">Volver a la tienda</a>
        <!-- Este enlace conecta a la pasarela de pago "Conekta" -->
        <a href="pago.html" class="btn-pasarelaPago">Pagar Payacarrito</a>
    </div>
</body>
<script type="module" src="/js/addProductos.js"></script>

</html>