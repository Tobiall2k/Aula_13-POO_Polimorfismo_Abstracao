<?php

abstract class FormaGeometrica{

    abstract public function calcularArea();  
}

class Retangulo extends FormaGeometrica{
    protected float $base;
    protected float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }

    public function exibirArea(){
        echo "Aréa Retângulo: " .number_format($this->calcularArea(), 2). " cm<br><hr>";
    }
}

class Circulo extends FormaGeometrica{
    protected float $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return 3.14 * ($this->raio ** 2);
    }

     public function exibirArea(){
        echo "Aréa Círculo: " .number_format($this->calcularArea(), 2). " cm<br><hr>";
    }
}

$retangulo = new Retangulo (8,5);
$retangulo->calcularArea();
$retangulo->exibirArea();

$circulo = new Circulo (8,5);
$circulo->calcularArea();
$circulo->exibirArea();
?>