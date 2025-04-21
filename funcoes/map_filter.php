<div class="titulo">Map e Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];

function dobrar($n) {
    return $n * 2;
}

function passouDeAno($n) {
    return $n >= 7;
}

echo print_r(array_map('dobrar', $notas));
echo "<br>";
echo print_r(array_filter($notas, 'passouDeAno'));
echo "<br>";

//Map podemos usar funções de transformação, Filter para filtragem
// Sempre é retornado um array novo
