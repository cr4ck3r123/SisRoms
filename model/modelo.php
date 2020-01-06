<?php

class modelo {
  
        private $id;
        private $modelo;
        private $versao;
        private $sigla;
        private $idmarca;
        private $url;
        
        function __construct($id, $modelo, $versao, $sigla, $idmarca) {
            $this->id = $id;
            $this->modelo = $modelo;
            $this->versao = $versao;
            $this->sigla = $sigla;
            $this->idmarca = $idmarca;
        }        
        
        function getId() {
            return $this->id;
        }

        function getModelo() {
            return $this->modelo;
        }

        function getVersao() {
            return $this->versao;
        }

        function getSigla() {
            return $this->sigla;
        }

        function getIdmarca() {
            return $this->idmarca;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        function setVersao($versao) {
            $this->versao = $versao;
        }

        function setSigla($sigla) {
            $this->sigla = $sigla;
        }

        function setIdmarca($idmarca) {
            $this->idmarca = $idmarca;
        }

        function getUrl() {
            return $this->url;
        }

        function setUrl($url) {
            $this->url = $url;
        }


    
    
}
