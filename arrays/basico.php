<div class="titulo">Arrays</div>

<?php
$lista = array(1, 2, 3, "string");

foreach ($lista as $item) {
    echo $item . "<br>";
}

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

$dados['sexo'] = 'F';

foreach($dados as $key => $valor) {
    echo "Chave: $key, Valor: $valor <br>";
}