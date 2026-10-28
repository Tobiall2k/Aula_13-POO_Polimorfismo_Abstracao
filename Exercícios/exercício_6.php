<?php

abstract class ContaBancaria {
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        echo "Você vai depositar...<br>";
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria{
    public function __construct($titular, $saldo){
        parent::__construct($titular,$saldo);
    }
    
    public function depositar($valor){
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Insira um valor maior que R$0,00";
        } 
    }

    public function calcularTarifa(){
        return $this->saldo -= 15;
    }

    public function exibirTitularSaldoConta(){
        echo "Titular: ". $this->titular. " | Conta Popuança | Saldo: R$" .number_format($this->saldo, 2, ",", "."). "<br>"; 
    }
}

class ContaPoupanca extends ContaBancaria{
    public function __construct($titular, $saldo){
        parent::__construct($titular,$saldo);
    }

    public function depositar($valor){
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Insira um valor maior que R$0,00";
        }
    }

    public function calcularTarifa(){
        return $this->saldo -= 0;
    }

    public function exibirTitularSaldoConta(){
        echo "Titular: ". $this->titular. " | Conta Popuança | Saldo: R$" .number_format($this->saldo, 2, ",", "."). "<br>"; 
    }
}


$contaCorrente = new ContaCorrente("Tobias", 500);
$contaCorrente->exibirTitularSaldoConta();
$contaCorrente->depositar(200);
$contaCorrente->calcularTarifa();
$contaCorrente->exibirTitularSaldoConta();

echo "<br>";

$contaPoupanca = new ContaPoupanca("Maria", 500);
$contaPoupanca->exibirTitularSaldoConta();
$contaPoupanca->depositar(200);
$contaPoupanca->calcularTarifa();
$contaPoupanca->exibirTitularSaldoConta();

?>