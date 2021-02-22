<?php

abstract class Pecas {
    private $imagem;

    public function __construct($imagem){
        $this->setImagem($imagem);
    }

    protected function setImagem($imagem){
        $this->imagem = "<img src='PecasPNG/$imagem.png' width='60'>";
    }

    public function getImagem(){
        return $this->imagem;
    }


    abstract function movimentosPossiveis();
    abstract function movimento();
}