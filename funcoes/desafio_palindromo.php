<div class="titulo">Desafio Palindromo</div>

<?php

function testaPalindromo($palavra) {
    return (strtolower($palavra) === strtolower(strrev($palavra))) ? 'Sim' : 'Não';
}
echo testaPalindromo('ovo') . "<br>";
echo testaPalindromo('Ana') . "<br>";
echo testaPalindromo('Bolacha') . "<br>";

function somar(int $a, int $b): int {
    return $a + $b;
}

/* Parâmetros variaveis em função: Eu coloco "..." no parametro, tipo function teste(...$numeros)
 * nisso eu poderei passar varios valores, que serão tratados como um array
 *
 *
 * Parâmetros padrão em função: Eu posso colocar diretamente um valor fixo no parâmetro, que será usado
 * caso eu nao passe nada. Se eu passar, sobrescreve. O mais inteligente é deixar por último
 * Exemplo: anotarPedido($comida, $bebida = 'suco')
 * Nesse caso, se eu nao passar nada na bebida sempre vai ter o valor suco, porém comida eu sou obrigado a passar
 *
 *
 *
 */

