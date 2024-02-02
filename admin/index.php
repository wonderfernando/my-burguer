<?php
include "../config.php";

$busca = $con->prepare("SELECT * FROM produtos");
$busca->execute();
?>
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
        <a href="/burguer"><img src="../img/MYBURGUER.png" width="150px"></a>
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
            <h1>Produtos</h1>
            <br>
            <a href="/burguer/admin/add-produto.php"><button class="btn-add">Adicionar</button></a>
            <br><br>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Quantidadde</th>
                </tr>
<?php
    while ($item = $busca->fetch()) {
    ?>
                <tr>
                    <td><?php echo $item["nome"]; ?></td>
                    <td><?php echo $item["preco"]; ?></td>
                    <td><?php echo $item["quantidade"]; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    

</body>
</html>