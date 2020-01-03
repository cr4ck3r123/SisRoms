<?php


class Categoria {
    
    private $idCategoria;
    private $categoria;
    
    function __construct($idCategoria, $categoria) {
        $this->idCategoria = $idCategoria;
        $this->categoria = $categoria;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


    
}
