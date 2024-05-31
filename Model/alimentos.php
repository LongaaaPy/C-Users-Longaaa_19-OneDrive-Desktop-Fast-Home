<!DOCTYPE html>
<html lang="es">
    <link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Views/css/alimento.css">
    <script src="../js/albeco.js" async></script>
    <title>Fast-Home/Alimentos--comida </title>
</head>
<body>
    <header>
        <h1>Alimentos y comida</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Cubeta de Huevos</span>
                <img src="https://www.elcomercio.com/wp-content/uploads/2022/09/cubeta-huevos-ec.jpg" alt="" class="img-item">
                <span class="precio-item">$18.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Aceite Vegetal FRESCAMPO 3000 ml</span>
                <img src="https://exitocol.vtexassets.com/arquivos/ids/13929565-1600-auto?v=637944648796900000&width=1600&height=auto&aspect=true" alt="" class="img-item">
                <span class="precio-item">$21.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Arroz Diana blanco x25und x500g c-u</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/186291-1600-1600?v=637813981749770000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$49.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Panela La Nocaimera pastilla x1000g</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/194599-1600-1600?v=637814055637200000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$6.400$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Atún En Aceite Van Camps x 160g x 4und</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/191502-1600-1600?v=637814013806200000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$29.900$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cebolla cabezona a granel x 500gr</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/205433-1600-1600?v=637814200019830000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$3.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Tomate chonto x 500gr</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/204905-1600-1600?v=637814198665930000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$2.600$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Galletas Saltín Noel x 500 gr x 5 Tacos</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/194436-1600-1600?v=637814055083070000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$6.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Leche entera Colanta bolsa x6und x1000ml c-u</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/487649-1600-1600?v=638201012781000000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$27.300$ COP

                </span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
                <br>
                <button class="btn-pagar">Pedir Domicilio<a href="Domicilios.php"><i class="fa-solid fa-bag-shopping"></i></a></button>
            </div>
        </div>
    </section>
    <button><a href="Pide tu FAST.php">VOLVER</a></button>
</body>
</html>