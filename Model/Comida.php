<!DOCTYPE html>
<html lang="es">
    <link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Views/css/comida.css">
    <script src="../js/albeco.js" async></script>
    <title>Fast-Home/Comida-rapida </title>
</head>
<body>
    <header>
        <h1>Comida Rapida</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Hambuerguesa doble carne</span>
                <img src="https://hamburguesasdelrodeo.com/cdn/shop/products/hamburguesa_doble_carne_1024x1024.png?v=1594184497" alt="" class="img-item">
                <span class="precio-item">$15.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Combo Hamburguesa</span>
                <img src="https://hamburguesasdelrodeo.com/cdn/shop/products/combo-del-rodeo_1024x1024.png?v=1594184518" alt="" class="img-item">
                <span class="precio-item">$23.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Combo Pollo frito</span>
                <img src="https://i0.wp.com/pollosuperrapidito.com.gt/wp-content/uploads/2019/10/FAMILIAR_Artboard-1.jpg?fit=1667%2C1667&ssl=1" alt="" class="img-item">
                <span class="precio-item">$31.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Combo Pizza familiar</span>
                <img src="https://product-assets.faasos.io/production/product/image_1634391489305_Non_Veg_Cheese_Burst_Pizza_Combo.jpg" alt="" class="img-item">
                <span class="precio-item">$28.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Triple taco</span>
                <img src="https://www.comedera.com/wp-content/uploads/2017/08/tacos-al-pastor-receta.jpg" alt="" class="img-item">
                <span class="precio-item">$19.900$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Hambuerguesa de pollo</span>
                <img src="https://images.hola.com/imagenes/cocina/recetas/20211026198503/hamburguesa-pollo-crema-cacahuete/1-12-694/burguer-pollo-adob-t.jpg" alt="" class="img-item">
                <span class="precio-item">$18.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Combo Perro</span>
                <img src="https://www.febepos.com/pictures/83/pic_combos-1.9combo-perro-grande.jpeg" alt="" class="img-item">
                <span class="precio-item">$18.500$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Salchipapa familiar</span>
                <img src="https://laparisienne.com.co/cdn/shop/articles/SALCHIPAPA_LA_PARISIENNE_CUADRADA.jpg?v=1682626308" alt="" class="img-item">
                <span class="precio-item">$42.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Perro y Hambuerguesa</span>
                <img src="https://pedilo.nyc3.digitaloceanspaces.com/2020/12/burgerhouse_combo_1.jpg" alt="" class="img-item">
                <span class="precio-item">$22.300$ COP

                </span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
       
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
               
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                
                <button class="btn-pagar">Pedir Domicilio<a href="Domicilios.php"><i class="fa-solid fa-bag-shopping"></i></a></button>
            </div>
        </div>
    </section>
    <button><a href="Pide tu FAST.php">VOLVER</a></button>
</body>
</html>