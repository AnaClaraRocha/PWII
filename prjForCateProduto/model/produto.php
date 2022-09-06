<?php

 require_once('Categoria.php');

    class Produto{

        private $idproduto;
        private $nomeproduto;
        private $precoproduto;

        private $categoria;

        public function __construct()
        {
            $categoria = new Categoria();
        }

        public function getId(){
            return $this->idproduto;
        }

        public function setId($idproduto){
            $this->idproduto=$idproduto;
        }

        public function setNomeProduto($nomeproduto){
            $this->nomeproduto=$nomeproduto;
        }
        public function getNomeProduto(){
            return $this->nomeproduto;
        }

        public function setPrecoProduto($precoproduto){
            $this->precoproduto=$precoproduto;
        }
        public function getPrecoProduto(){
            return $this->precoproduto;
        }

        public function getCategoria(){
            return $this->categoria;
        }
        
        public function setCategoria($categoria){
            $this->categoria=$categoria;
        }

    }

?>