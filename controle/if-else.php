<div class="titulo">If e Else</div>

<?php
$aux = 10;
$aux2 = 8;
if ($aux >= 10 && $aux2 >= 10) {
    echo "Valor igual ou maior que 10";
} else {
    echo "Valor menor que 10";
}

echo "<br>";
echo '<p>Spaceship: </p><hr>';
echo var_dump(500 <=> 3) .'<br>';
echo var_dump(50 <=> 50) . '<br>';
var_dump(50 <=> 51);

?>

<!-- Lembrar dos operadores === e !==, que além de comparar apenas o valor, vão comparar os tipos -->
<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        max-resolution: 0px;
    }
</style>
