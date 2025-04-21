<div class="titulo">Escopo</div>

<?php
$var1 = 10;
function testandoFuncao() {
    $var1 = 15;
    echo "Durante a chamada: $var1 <br>" ;
}

echo "Antes da chamada: $var1 <br>";
testandoFuncao();
echo "Depois da chamada: $var1 <br>";

function somar($n1) {
    return function ($n) use ($n1) {
        return $n + $n1;
    };
}

?>