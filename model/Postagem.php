<?php


class Postagem {
   
    private $idPostagem;
    private $titulo;
    private $resumo;
    private $conteudo;
    private $dataPostagem;
    private $dataFim;
    private $idCategoria;
    
    function __construct($idPostagem, $titulo, $resumo, $conteudo, $dataPostagem, $dataFim, $idCategoria) {
        $this->idPostagem = $idPostagem;
        $this->titulo = $titulo;
        $this->resumo = $resumo;
        $this->conteudo = $conteudo;
        $this->dataPostagem = $dataPostagem;
        $this->dataFim = $dataFim;
        $this->idCategoria = $idCategoria;
    }

    function getIdPostagem() {
        return $this->idPostagem;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getConteudo() {
        return $this->conteudo;
    }

    function getDataPostagem() {
        return $this->dataPostagem;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setIdPostagem($idPostagem) {
        $this->idPostagem = $idPostagem;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setResumo($resumo) {
        $this->resumo = $resumo;
    }

    function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    function setDataPostagem($dataPostagem) {
        $this->dataPostagem = $dataPostagem;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }


    
}
