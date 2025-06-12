<?php

class Pessoa {

    private string $nome;
    private string $idade;

    function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function  getNome(): string {
        return $this->nome;

    }
    function getIdade(): int {
        return $this->idade;
    }

}
