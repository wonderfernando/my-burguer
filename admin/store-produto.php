<?php
include "../config.php";
$nome = $_POST["nome"];
$preco = $_POST["preco"]; 
$quantidade = $_POST["quantidade"];
$img = $_FILES["image"];
$caminho = $img["name"];
move_uploaded_file($img["tmp_name"], "../img/".$caminho);


$insert = $con->prepare("INSERT INTO produtos (nome, preco, quantidade,img) 
VALUES (:nome, :preco, :quantidade, :img)
");

$insert->bindValue(":nome",$nome);
$insert->bindValue(":preco",$preco);
$insert->bindValue(":quantidade",$quantidade);
$insert->bindValue(":img",$caminho);

$insert->execute();

header("location: /burguer/admin/");
