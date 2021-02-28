<?php
class Tabuleiro {

    private $tabuleiro = array([7], [7]);

    public function __construct(){

    }

    public function getTabuleiroPecaCasa($row, $col){
        if(!empty($this->tabuleiro[$row][$col])){
            echo $this->tabuleiro[$row][$col]->getImagem();
        }
        return null;
    }

    public function setTabuleiroInicial(){
        $this->tabuleiro[0][0] = new Torre("TorrePreta");
        $this->tabuleiro[0][1] = new Cavalo("CavaloPreto");
        $this->tabuleiro[0][2] = new Bispo("BispoPreto");
        $this->tabuleiro[0][3] = new Rainha("RainhaPreta");
        $this->tabuleiro[0][4] = new Rei("ReiPreto");
        $this->tabuleiro[0][5] = new Bispo("BispoPreto");
        $this->tabuleiro[0][6] = new Cavalo("CavaloPreto");
        $this->tabuleiro[0][7] = new Torre("TorrePreta");
        $this->tabuleiro[1][0] = new Peao("PeaoPreto");
        $this->tabuleiro[1][1] = new Peao("PeaoPreto");
        $this->tabuleiro[1][2] = new Peao("PeaoPreto");
        $this->tabuleiro[1][3] = new Peao("PeaoPreto");
        $this->tabuleiro[1][4] = new Peao("PeaoPreto");
        $this->tabuleiro[1][5] = new Peao("PeaoPreto");
        $this->tabuleiro[1][6] = new Peao("PeaoPreto");
        $this->tabuleiro[1][7] = new Peao("PeaoPreto");

        $this->tabuleiro[6][0] = new Peao("PeaoBranco");
        $this->tabuleiro[6][1] = new Peao("PeaoBranco");
        $this->tabuleiro[6][2] = new Peao("PeaoBranco");
        $this->tabuleiro[6][3] = new Peao("PeaoBranco");
        $this->tabuleiro[6][4] = new Peao("PeaoBranco");
        $this->tabuleiro[6][5] = new Peao("PeaoBranco");
        $this->tabuleiro[6][6] = new Peao("PeaoBranco");
        $this->tabuleiro[6][7] = new Peao("PeaoBranco");
        $this->tabuleiro[7][0] = new Torre("TorreBranca");
        $this->tabuleiro[7][1] = new Cavalo("CavaloBranco");
        $this->tabuleiro[7][2] = new Bispo("BispoBranco");
        $this->tabuleiro[7][3] = new Rainha("RainhaBranca");
        $this->tabuleiro[7][4] = new Rei("ReiBranco");
        $this->tabuleiro[7][5] = new Bispo("BispoBranco");
        $this->tabuleiro[7][6] = new Cavalo("CavaloBranco");
        $this->tabuleiro[7][7] = new Torre("TorreBranca");

    }

}