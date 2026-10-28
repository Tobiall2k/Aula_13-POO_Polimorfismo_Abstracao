<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca. "<br>";
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico{
    public function ligar(){
        echo "Ligando a tela...<br><hr>";
    }
}

class Geladeira extends Eletrodomestico{
     public function ligar(){
        echo "Iniciando sistema de refrigeração...<br>";
    }
}

$televisao = new Televisao("Samsung");
echo $televisao->getMarca();
$televisao->ligar();

$geladeira = new Geladeira("Electrolux");
echo $geladeira->getMarca();
$geladeira->ligar();

?>