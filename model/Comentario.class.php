<?php


class Comentario {
  private $idComentario;
  private $comentario;
  private $dataComentario;
  private $idPostagem;
  
  function __construct($idComentario, $comentario, $dataComentario, $idPostagem) {
      $this->idComentario = $idComentario;
      $this->comentario = $comentario;
      $this->dataComentario = $dataComentario;
      $this->idPostagem = $idPostagem;
  }
  function getIdComentario() {
      return $this->idComentario;
  }

  function getComentario() {
      return $this->comentario;
  }

  function getDataComentario() {
      return $this->dataComentario;
  }

  function getIdPostagem() {
      return $this->idPostagem;
  }

  function setIdComentario($idComentario) {
      $this->idComentario = $idComentario;
  }

  function setComentario($comentario) {
      $this->comentario = $comentario;
  }

  function setDataComentario($dataComentario) {
      $this->dataComentario = $dataComentario;
  }

  function setIdPostagem($idPostagem) {
      $this->idPostagem = $idPostagem;
  }

 
    
}
