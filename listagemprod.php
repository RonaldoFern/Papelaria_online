<?php
        include_once("listarproduto.php");
        
        $oProduto  = new Produto;
        //Atribuindo valores ao objeto
        $oProduto->$nome_produto = $_POST["nome_produto"];
        $oProduto->$preco_produto  = $_POST["preco_produto"];
        //chamando a funcao que faz o insert
        $oProduto->setProduto();
        echo "Produto ". $_POST["produto"] . " cadastrado com sucesso!";
?>