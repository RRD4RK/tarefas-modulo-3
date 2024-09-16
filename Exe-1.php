<?php

class Pessoa{
    public $nome;
    public $idade;
    public $DiaNasc;
    public $MesNasc;
    public $AnoNasc;

    public function calculaIdade(){
        $this->AnoNasc;
        return "Idade: " . 2024- $this->AnoNasc ."anos\n";
    }

    public function informaIdade(){
        return $this->calculaIdade();
    }

    public function informaNome(){
        return $this->nome . "\n";
    }

    public function ajusteDataNascimento(){
        $this->AnoNasc;
        $this->DiaNasc;
        $this->MesNasc;
        return "{$this->DiaNasc}/{$this->MesNasc}/{$this->AnoNasc}";
    }
}

$pessoa = new Pessoa;
$pessoa->nome = readline("Escreva seu nome: ");
$pessoa->DiaNasc = readline("Digite o dia do seu nascimento:");
$pessoa->MesNasc = readline("Digite o mês do seu nascimento:");
$pessoa->AnoNasc = readline("Digite o ano em que você nasceu:");

echo $pessoa->calculaIdade();
echo $pessoa->informaNome();
echo $pessoa->ajusteDataNascimento();