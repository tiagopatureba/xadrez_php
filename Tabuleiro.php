<?php
class Tabuleiro {

    private $tabuleiro = array([7], [7]);

    public function __construct(){
        
    }

    public function getTabuleiro(){
        return $this->tabuleiro;
    }

    public function setTabuleiro($tabuleiro){
        $this->tabuleiro[1][0] = new Peao();
    }
}