<?php

class Frete{
    protected float $peso;

    public function __construct($peso){
        $this->peso = $peso;
    }

    public function calcularFrete(){
        echo "Calculando frete...";
    }
}

class FreteNormal extends Frete{
    public function __construct($peso){
        parent::__construct($peso);
    }

    public function calcularFrete(){
        return ($this->peso * 2) + 10;
    }

    public function exibirFrete(){
        echo "Frete Normal: R$" .number_format($this->calcularFrete(),2,",","."). "<br>";
    }
}

class FreteExpresso extends Frete{
    public function __construct($peso){
        parent::__construct($peso);
    }

    public function calcularFrete(){
        return ($this->peso * 5) + 20;
    }

    public function exibirFrete(){
        echo "Frete Normal: R$" .number_format($this->calcularFrete(),2,",","."). "<br>";
    }
}

class RetiradaLoja extends Frete{
    public function __construct($peso){
        parent::__construct($peso);
    }
    
    public function calcularFrete(){
        return 0;
    }

    public function exibirFrete(){
        echo "Retirada na Loja: R$0,00";
    }
}

$freteNormal = new FreteNormal(40);
$freteNormal->calcularFrete();
$freteNormal->exibirFrete();

$freteExpresso = new FreteExpresso(40);
$freteExpresso->calcularFrete();
$freteExpresso->exibirFrete();

$retiradaLoja = new RetiradaLoja(40);
$retiradaLoja->calcularFrete();
$retiradaLoja->exibirFrete();

?>