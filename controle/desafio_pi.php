<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;
$piErrado = 2.8;

if (pi() - $pi <= 0.01) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}

?>