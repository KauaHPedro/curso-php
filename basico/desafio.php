<div class="titulo">Desafio Seção 1</div>

<?php
$item1 = 1 + 1;
$item2 = 4 + 4;
$item3 = 8 + 8;

function soma(int $n1, int $n2): int {
    return $n1 + $n2;
}

?>

<ul>
    <li>1 + 1 = <?= $item1 ?> </li>
    <li>4 + 4 = <?= $item2 ?> </li>
    <li>8 + 8 = <?= soma(8, 8) ?> </li>
</ul>

