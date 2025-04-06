<div class="titulo">Desafio Precedência</div>

<?php

try {
    echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
} catch (DivisionByZeroError $e) {
    echo $e->getMessage();
}
