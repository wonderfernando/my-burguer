<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body,input,button{
            font-family: Arial, Helvetica, sans-serif;
        }
        ul{
            list-style: none;
        }
        img{
            max-width: 100%;
        }
        a{
            text-decoration: none;
        }

        header{
            background-color: #333;
            color: "#FFF";
            height: 6rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .menu{
            display: flex;
            gap: 1rem;
        }
        .menu a{ 
            color: #fff;
            transition: 200ms;
            font-weight: 700;
        }
        .menu a:hover{
            color: #FCAF17;
        }
        .header-right{
            display: flex;
            align-items: center;
            gap: .5rem;
            text-transform: uppercase;
        }
        span{
            color: #fff;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <a href=""><img src="./img/MYBURGUER.png" width="150px"></a>
        <div class="header-right">
            <nav>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Pedidos</a></li>
                </ul>
            </nav>
            <span>|</span>
            <a href=""><img src="./img/icons/login-de-usuario.png" width="20px"/></a>
            <a href=""><img src="./img/icons/carrinho-de-compras.png" width="20px"/></a>
        </div>
    </header>
    
</body>
</html>