<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        .main{
          padding-left: 1rem;
          padding-right: 1rem;
            max-width:  920px;
            margin:50px auto;
        }
        .main table{
            width:100%;
            text-align: left;
            border-collapse: collapse;
        }
        td,th{
            padding: .5rem;
            border-bottom: 1px solid rgba(0,0,0,0.2);
        }
        input{
            width: 100%;
            padding: .5rem;
            border-radius: 5px;
            height: 2rem;
            border: none;
            background-color: #f1f1f1;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        form div{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .btn-add{
            padding: .5rem;
            cursor: pointer;
            outline: transparent;
            border: none;
            border-radius: 4px;
            height: 2rem;
            color: #fff;
            font-weight: 500;
            background-color: #1773fc;
        }
    </style>
</head>
<body>
<header>
        <a href=""><img src="../img/MYBURGUER.png" width="150px"></a>
        <div class="header-right">
            <nav>
                <ul class="menu">
                    <li><a href="/burguer/admin">Produtos</a></li>
                    <li><a href="/burguer/admin/pedidos.php">Pedidos</a></li>
              
                </ul>
            </nav>
         </div>
    </header>
        <div class="main">
            <h1>Adicionar Produtos</h1>
       
            <br><br>
             <form action="">
                <div>
                    <label for="">Nome do produto</label>
                    <input type="text" placeholder="Produto" name="nome" id="">
                </div>
                <div>
                    <label for="">Preco do produto</label>
                    <input type="number" placeholder="Preco" name="preco" id="">
                </div>
                <div>
                    <label for="">Quantidade produto</label>
                    <input type="number" placeholder="Quantidade" name="quantidade" id="">
                </div>
                <div>
                    <label for="">Imagem</label>
                    <input type="file" placeholder="Produto" name="image" id="">
                </div>
                <div>
                    <button class="btn-add">Salvar</button>
                </div>
             </form>
        </div>
    

</body>
</html>