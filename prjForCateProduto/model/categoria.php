<?php

    class Categoria{

        private $nomeproduto;
        private $idcategoria;

        public function getId(){
            return $this->idcategoria;
        }

        public function setId($idcategoria){
            $this->idcategoria = $idcategoria;
        }
        
        public function getNome(){
            return $this->nomeproduto;
        }

        public function setNome($nomeproduto){
            $this->nomeproduto = $nomeproduto;
        }

    }