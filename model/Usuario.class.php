<?php

class Usuario {
    
    private $idUsuario;
    private $perfil;
    private $nome;
    private $usuario;
    private $senha;
    private $email;    
    
    function __construct($idUsuario, $nome, $senha, $perfil, $email) {
        $this->idUsuario = $idUsuario;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->perfil = $perfil;
        $this->email = $email;
    }   
    
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

        function getIdUsuario() {
        return $this->idUsuario;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
