<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
$variavelValor = 'valor alterado';

echo "<br> $variavel $variavelValor";

//Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "<br> $variavel $variavelValor";