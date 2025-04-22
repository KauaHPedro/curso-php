<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {

    public function metodo1() {
        echo "Implementando o método 1";
    }

    public function metodo2($parametro) {
        echo "Implementando o método 2: $parametro";
    }
    public function metodo3() {
        echo "Estou funcionando!";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {
        $this->metodo2($parametro);
    }
}

$exemplo = new Classe('instanciando a Classe');
echo "<br>";
$exemplo->metodo3();