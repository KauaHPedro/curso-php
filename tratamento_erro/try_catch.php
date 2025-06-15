<div class="titulo">Try-Catch</div>

<?php

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo $e->getMessage() . '<br>';
} finally {
    echo "Teste <br>";
}

require_once 'erros_personalizados.php';

$idadesAvalidadas = array(21, 14, 85, 62, 12);
foreach ($idadesAvalidadas as $idade) {
    try {
        echo calcularTempoAposentadoria($idade) . '<br>';
    } catch (FaixaEtariaException $e) {
        echo $e->getMessage() . '<br>';
    }
}

