<?php

require_once "model/categoria.php";

    class CategoriaController{

        private $categoria;

        public function __construct($categoria){
            $this->categoria = $categoria;
        }

    }

?>