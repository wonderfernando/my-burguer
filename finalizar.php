<?php
include "config.php";
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $preco= $_GET["preco"];
?>
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
        .banner{
            height: 500px;
            background-image: url("img/cheeseburger-gourmet-grelhado-com-legumes-frescos-e-batatas-fritas-geradas-por-ia.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            align-items: flex-end;
            padding-bottom: 2rem;
            padding-left: 2rem;
            color: #fff;
          
        }
        .title-banner{
            color: #fff;
            font-size: 120px;
        }
         h1{
            margin: 0;
         }
         .hour{
            height: 200px;
            background-image: url("img/chama-de-fogo-em-fundo-preto.jpg");
            background-size: cover;
            background-position: bottom;
            display: flex;
            align-items: center;
            padding-left: 2rem;
            color: #fff;
            font-size: 20px;
        }
        .about{
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-height: 500px;
            overflow: hidden;
        }
        .about-left{
            padding-left: 4rem;
            padding-top: 4rem;
            color: #fff;
            background-image: url("img/4486964.jpg");
            background-size: cover;
        }
        .about-left h1{
            font-size: 32px;
        }
        .about-left .info{
                background: rgba(0, 0,0,0.8);
                padding: 1rem;
                line-height: 1.6;
        }
        .more{
            padding: 2rem;
        }
        .more .items{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 2rem;
            text-align: center;
        }
        .more .item button{
            background-color: darkslategray;
            outline: none;
            border: none;
            border-radius: 4px;
            padding: .3rem;
            display: flex;
            justify-content: center;
            cursor: pointer;
            align-items: center;
            color: #fff;
            width: 100%;
            gap: .2rem;
        }
        .more .items .item .img-item{
            border-radius: 4px;
            width:100%;
        }

        .more .items .item{
            display: flex;
            flex-direction: column;
            gap: .2rem;
            justify-content: center;
        }
        .more .items .item span{
            color: #333;
            font-size: 15px;
            font-weight: 700;
        }
        .more form{
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        
        .more form input{
            width: 100px;
            padding: .4rem;
        }
        footer{
            background-color: #000;
            color: #fff;
            display: grid;
            grid-template-columns: 200px 200px;
            height: 250px;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .final{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        form{
            width: 100%;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        form div{
            display: flex;
            flex-direction: column;
            align-items: start;
        }
        form input{
            width: 100%;
            padding: .5rem;
        }
        button{
            padding: .5rem;
            height: 2rem;
            cursor: pointer;
            border: none;
            outline: transparent;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
            background: #ae7400;
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
    
  <div class="final">
  
    <form action="store-pedido.php" method="post">
        <h1><?php echo $nome ?></h1>
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="">Endereco</label>
            <input type="text" name="endereco">
        </div>
        <div>
            <label for="">Quantidade</label>
            <input type="number" value="1" id="quantidade" name="quantidade">
        </div>
        <div>
            <label for="">Preco unitario</label>
            <input type="number" value="2" id="preco"  value="<?php echo $preco; ?>"  name="" readonly>
        </div>
        <div>
            <label for="">Total</label>
            <input readonly type="number" id="total" name="total">
        </div>
        <input  type="hidden" value="<?php echo $nome; ?>" name="produto" >
        <div>
            <button>Confirmar pedido</button>
        </div>
    </form>
    <img src="./img/delicioso-hamburguer-com-ingredientes-frescos.jpg" alt="">
  </div>
 

    
    <footer>
        <div>
            <h1>Contatos</h1>
            <ul>
                <li>933 234 765</li>
                <li>912 543 754</li>
                <li>burguer@comercial.com</li>
            </ul>
        </div>
        <div>
            <h1>Localizacao</h1>
            <ul>
                <li>Vila Alice, Rua Bula Matadi Casa Nº80, Luanda - Angola</li>
                <li>Centralidade do Kilamba, quarteirão V/V13, Rés de chão, Luanda - Angola</li>
         </ul>
            
        </div>
    </footer>
    <script>
            const total = document.getElementById("total")
            const quanta = document.getElementById("quantidade")
            const unit = document.getElementById("preco")
          
            total.value = Number(quanta.value) * unit.value
           
            quanta.addEventListener("change",  (params) => {
             total.value = Number(params.target.value) * unit.value
                
            })
</script>
</body>
</html>