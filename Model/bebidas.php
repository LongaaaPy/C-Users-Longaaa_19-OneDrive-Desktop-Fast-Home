<!DOCTYPE html>
<html lang="es">
    <link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Views/css/bebidas.css">
    <script src="../js/albeco.js" async></script>
    <title>Fast-Home/Liquidos-bebidas alcoholicas </title>
</head>
<body>
    <header>
        <h1>Liquidos y Bebidas alcoholicas</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Gaseosa Quatro toronja sabor original x1.5L</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/454692-1600-1600?v=638084574714130000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$3.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Gaseosa Pepsi Jumbo x3.125L</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/186499-1600-1600?v=637813982358400000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$5.300$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Gaseosa Coca-Cola sin azúcar pet x2.5L</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/454684-1600-1600?v=638084574670100000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$5.600$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">BAVARIA Cerveza Corona botella x6und x355ml c-u </span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/440070-1600-1600?v=638043996742900000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$28.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cerveza Poker lata x6und x330ml c-u</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/440018-1600-1600?v=638043996576070000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$16.900$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Ron Viejo De Caldas Tradicional x1750ml</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/463383-1600-1600?v=638126073732970000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$98.000$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Whisky escocés Buchanan's Deluxe 12 años x750ml

                </span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/487604-1600-1600?v=638200425024800000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$165.600$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Jugo citrus Tampico botella x 6 und x 240 ml c-u.</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/206784-1600-1600?v=637814203322170000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$7.200$ COP</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Jugo Hit Surtido Brick x200ml Pague 10 lleve 12</span>
                <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/186569-1600-1600?v=637813982555800000&width=1600&height=1600&aspect=true" alt="" class="img-item">
                <span class="precio-item">$12.300$ COP

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
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i></button>
                <button class="btn-pagar">Pedir Domicilio<a href="Domicilios.php"><i class="fa-solid fa-bag-shopping"></i></a></button>
            </div>
        </div>
    </section>
    <button><a href="Pide tu FAST.php">VOLVER</a></button>
</body>
</html>