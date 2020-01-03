<?php


class Perfil {
    
    private $idPerfil;
    private $perfil;
    
    function __construct($idPerfil, $perfil) {
        $this->idPerfil = $idPerfil;
        $this->perfil = $perfil;
    }
    
    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }



}
