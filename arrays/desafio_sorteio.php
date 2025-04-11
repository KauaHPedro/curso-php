<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Moana", "Aurora", "Cinderela"];
echo "<h1>Sorteando um nome: {$nomes[array_rand($nomes)]}</h1>";
