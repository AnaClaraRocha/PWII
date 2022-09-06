<?php

    class Produto{
        private $descricao;
        private $preco;

        
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function cadastrar(){
            return "Produto cadastrado com sucesso.";
        }
    
    }

?>