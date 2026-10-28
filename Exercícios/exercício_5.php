<?php

abstract class Funcionario {
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
   private float $salarioMensal;
   
   public function __construct($nome, $salarioMensal){
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
   }

   public function calcularSalario(){
        return $this->salarioMensal;
   }

   public function exibirSalario(){
        echo "Funcionário Fixo: R$" .number_format($this->calcularSalario(), 2, ",", "."). "<br>";
    }
}

class FuncionarioComissionado extends Funcionario{
    private float $salarioBase;
    private float $valorVendas;

    public function __construct($nome, $salarioBase, $valorVendas){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->valorVendas = $valorVendas;
    }

    public function calcularComissão(){
        return $this->valorVendas * 0.1;
    }

    public function calcularSalario(){
        return $this->salarioBase + $this->calcularComissão();
    }

    public function exibirSalario(){
        echo "Funcionário Comissionado: R$" .number_format($this->calcularSalario(), 2, ",", "."). "<br>";
    }

}

$funcionarioFixo = new FuncionarioFixo("Tobias", 2500);
$funcionarioFixo->calcularSalario();
$funcionarioFixo->exibirSalario();

$funcionarioComissionado = new FuncionarioComissionado("Maria", 1800, 8000);
$funcionarioComissionado->calcularComissão();
$funcionarioComissionado->calcularSalario();
$funcionarioComissionado->exibirSalario();


?>