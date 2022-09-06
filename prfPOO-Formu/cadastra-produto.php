<?php

    require_once("Produto.php");

    $produto = new Produto();

    $produto->setDescricao($_POST['txtDesc']);
    
    $produto->setPreco($_POST['txtPreco']);

    echo("Produto: ".$produto->getDescricao() );
    echo("<br> Preço: ".$produto->getPreco() );

    echo("<br>" . $produto->cadastrar() );

?>