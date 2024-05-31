<!DOCTYPE html>
<html lang="en">
    <link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast-Home/Pide tu Domicilio</title>
    

    <style>
        html {
            height: 100%;
        }
        
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#114425, #63d47c);
        }
        
        .login-box {
            position: absolute;
            top:100%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }
        
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        
        .login-box .user-box {
            position: relative;
        }
        
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            outline: none;
            background: transparent;
        }
        
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        
        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03f484;
            font-size: 12px;
        }
        
        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 30px 100px;
            color: #03f484;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: 0.5s;
            margin-top: 40px;
            letter-spacing: 4px;
            margin: 10px 25px;
        }
        
        .login-box a:hover {
            background: #03f484;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03f484, 0 0 25px #03f484, 0 0 50px #03f484, 0 0 100px #03f484;
        }
        
        .login-box a span {
            position: absolute;
            display: block;
        }
        
        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03f484);
            animation: btn-anim1 1s linear infinite;
        }
        
        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,
            100% {
                left: 100%;
            }
        }
        
        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03f484);
            animation: btn-anim2 1s linear infinite;
            animation-delay: 0.25s;
        }
        
        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,
            100% {
                top: 100%;
            }
        }
        
        .login-box a span:nth-child(3) {
            bottom: 0;
            right: 100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03f484);
            animation: btn-anim3 1s linear infinite;
            animation-delay: 0.5s;
        }
        
        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,
            100% {
                right: 100%;
            }
        }
        
        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03f484);
            animation: btn-anim4 1s linear infinite;
            animation-delay: 0.75s;
        }
        
        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,
            100% {
                
                bottom: 100%;
            }
        }
        iframe{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            outline: none;
            background:lightgreen;
            border-radius: 10%;
        }
        select{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color:lightgreen;
            margin-bottom: 30px;
            outline: none;
            background: transparent;
        }
    </style>
</head>

<body>
    <required>
    <div class="login-box">
        <h2>Domicilio</h2>
        <form action="">
            <div class="user-box">
                <input type="text" required>
                <label for="">Codigo</label>
            </div>
            <div class="user-box">
                <input type="text" required>
                <label for="">Nombre Completo:</label>
            </div>
            <div class="user-box">
                <input type="text" required>
                <label for="">Dicrección de entrega:</label>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63622.68572191695!2d-74.15986103835243!3d4.697238336274596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ca931bb3685%3A0x777bc49f16df0ff4!2zRW5nYXRpdsOhLCBCb2dvdMOh!5e0!3m2!1ses-419!2sco!4v1691912618974!5m2!1ses-419!2sco" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="user-box">
                <input type="int" required>
                <label for="">Numero de Telefono</label>
            </div>
            <div class="user-box">
                <input type="email" required>
                <label for="">Correo Electronico</label>
            </div>
            <div class="user-box">
                <input type="text" required>
                <label for="">Detalles del Pedido</label>
            </div>
<label>
    <select>
 <option value="">Dinero en Efectivo</option>
 <option value="">Trasferemcia</option>
 <option value="">Tarjetas de débito y crédito.</option>
    </select>
</label>
</required>





            <a href="end.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>Pedir Ya!!!
            </a>
        </form>
    </div>

</body>

</html>
