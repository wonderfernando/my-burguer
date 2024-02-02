<?php
include "config.php";
$nome = $_POST["nome"];
$total = $_POST["total"]; 
$quantidade = $_POST["quantidade"];
 $produto = $_POST["produto"];
 $endereco = $_POST["endereco"];
 
$insert = $con->prepare("INSERT INTO pedidos (nome, produto, quantidade,total,endereco) 
VALUES (:nome, :produto, :quantidade, :total,:endereco)
");

$insert->bindValue(":nome",$nome);
$insert->bindValue(":produto",$produto);
$insert->bindValue(":quantidade",$quantidade);
$insert->bindValue(":total",$total);
$insert->bindValue(":endereco",$endereco);
$insert->execute();

header("location: /burguer/");
