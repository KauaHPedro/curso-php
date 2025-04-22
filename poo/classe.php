<div class="titulo">Classe</div>

<?php

class Cliente {
    private string $nome;
    private int $idade;

    function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function seApresentar() : void {
        echo "Olá! Meu nome é {$this->nome}! Eu tenho {$this->idade} anos!";
    }
}

$cliente1 = new Cliente('Maria Silva', '18');
$cliente1->seApresentar();
