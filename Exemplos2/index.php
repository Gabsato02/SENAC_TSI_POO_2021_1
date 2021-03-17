<?php

interface iJogadorDeBasquete {
    public function enviarCorrespondencia();
    public function receberCorrespondencia();
}

// Uma classe abstrata é uma classe que não pode ser instanciada.
abstract class JogadorDeBasquete {
    protected $nome;
    protected $salario;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function passar() {
        echo "$this->nome passou a bola!<br>";
    }

    public function chutar() {
        echo "$this->nome chutou!<br>";
    }
}

// Para a classe abstrata ser utilizada, deve ser herdada por uma classe filha.
class Pivo extends JogadorDeBasquete {
    public function pegarRebote() {
        echo "$this->nome pegou um rebote!<br>";
    }
}

class Armador extends JogadorDeBasquete {
    /* Através do Polimorfismo é possível alterar um método herdado, para se adequar as necessidades
    da nova classe */
    public function chutar() {
        echo "$this->nome chutou de 3 pontos!<br>";
    }

    public function driblar() {
        echo "$this->nome driblou!<br>";
    }
}

$shaquileOneal = new Pivo("Shaquille O'Neal");
$shaquileOneal->chutar();

$magicJohnson = new Armador('Magic Johnson');
$magicJohnson->chutar();
