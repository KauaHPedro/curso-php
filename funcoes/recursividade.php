<div class="titulo">Recursividade</div>
<?php

function fatorialRecursivo($numero) {
    if ($numero <= 1) {
        return 1;
    }
    return $numero * fatorialRecursivo($numero - 1);
}

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function imprimeArray($array) {
    foreach ($array as $item) {
        if (is_array($item)) {
            forEach($item as $item2) {
                if(is_array($item2)) {
                    foreach($item2 as $item3) {
                        echo ">>> $item3 <br>";
                    }
                } else {
                    echo ">> $item2 <br>";
                }
            }
        } else {
            echo "> $item <br>";
        }

    }
}

imprimeArray($array);;