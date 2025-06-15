<?php namespace Exercicio; ?>
<div class="titulo">Exercício</div>

<?php

use DivisionByZeroError;
use NotIntegerException;

require_once 'erros_personalizados.php';

function intdiv(int $n1, int $n2) {

    if ($n2 == 0) {
        throw new \DivisionByZeroError("Divisor zerado");
    }
    if (is_int($n1 / $n2)) {
        return "Sucesso! Resultado = " . $n1 / $n2;
    } else {
        throw new NotIntegerException("Resultado não inteiro!");
    }
}

try {
    echo intdiv(8, 2) . '<br>';
    echo intdiv(8, 3) . '<br>';
    echo intdiv(8, 0) . '<br>';
    echo \intdiv(8, 3) . '<br>';
} catch (NotIntegerException $e) {
    echo $e->getMessage();
} catch (DivisionByZeroError $e) {
    echo $e->getMessage();
}


?>
