<?php

    require_once('model/produto.php');
    require_once('model/conexaoCategoria.php');

    class ProdutoDao{

        public static function cadastrar($produto){

            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbproduto(nomeProduto, precoProduto, idCategoria)
                                        VALUES (?,?,?)";

            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $produto->getNomeProduto());
            $prepareStatement->bindValue(2, $produto->getPrecoProduto());
            $prepareStatement->bindValue(3, $produto->getCategoria()->getId());

            $prepareStatement->execute();

            return 'Cadastro realizado com sucesso';

        }

    }

?>