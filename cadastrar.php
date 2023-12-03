<?php
require __DIR__ .'/vendor/autoload.php';
use \App\Entity\Produto;

if(isset($_POST['marca'],$_POST['marca'],$_POST['modelo'],$_POST['preco'],$_POST['quatidade'],$_POST['lote'])){
            $produtos = new Produto;
            $produtos->marca=$_POST['marca'];
            $produtos->modelo=$_POST['modelo'];
            $produtos->preco=$_POST['preco'];
            $produtos->quantidade=$_POST['quantidade'];
            $produtos->lote=$_POST['lote'];
            $produtos->specs=$_POST['specs'];
            $produtos->cadastrar();

}



include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/form.php';
include __DIR__ .'/includes/footer.php';

