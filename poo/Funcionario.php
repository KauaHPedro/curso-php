<?php

require_once 'Pessoa.php';
require_once 'interfaceApresentacao.php';

class Funcionario extends Pessoa implements InterfaceApresentacao {
    private $salario;

    public function __construct(string $nome, int $idade, $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }


    function getSalario() {
        return $this->salario;
    }
    function seApresentar(): string {
        return "Olá! Eu sou o {$this->getNome()}! Meu salário é {$this->getSalario()}";
    }
}
