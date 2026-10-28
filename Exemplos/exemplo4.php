<?php

abstract class Carro{
    abstract public function acelerar();

}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustível...<br><br>";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando energia...<br><br>";
    }
}

$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();

$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();

?>