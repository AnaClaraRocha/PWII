<?php

    require_once('model/Categoria.php');
    require_once('model/ConexaoCategoria.php');

    class CategoriaDao{

        public static function cadastrar($categoria){

            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbcategoria(nomeCategoria)
                            VALUES (?)";
            $prepareStatement = $conexao->prepare($queryInsert);
            $prepareStatement->bindValue(1, $categoria->getNome());

            $prepareStatement->execute();

            return 'Cadastro realizado com sucesso';

        }

    }

?>