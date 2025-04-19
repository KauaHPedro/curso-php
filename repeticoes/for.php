<div class="titulo">Laço For</div>

<?php
for($i = 0; $i < 10; $i++){
    echo "$i <br>";
}

echo "<hr>";

$array = ['Santos', 'Palmeiras', 'Corinthians', 'SPFC', 'Flamengo'];

for($i = 0; $i < count($array); $i++){
    echo "$array[$i] <br>";
}

echo "<hr>";

for($i = 1; $i <= 5; $i++){
    echo str_repeat('#', $i) . "<br>";
}

echo "Teste";

?>


