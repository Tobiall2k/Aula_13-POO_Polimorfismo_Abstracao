<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando...<br>";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando Combustível<br>";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando o Energia<br>";
    }
}

$carro = new Carro();
$carro->acelerar();

$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();

$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();


?>