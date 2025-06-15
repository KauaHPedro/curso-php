<?php

class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code,  $previous);
    }
}

class NotIntegerException  extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code,  $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException("Ainda está muito longe!");
    }
    if ($idade > 75) {
        throw new FaixaEtariaException("Já está aposentado!");
    }

    $diferenca = 75 - $idade;
    return "Faltam {$diferenca} anos para sua aposentadoria!";
}