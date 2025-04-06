<div class="titulo">Tipos de Dados</div>

<?php
echo 11;
echo "<br>";
var_dump(11);
echo "<br>";
//var_dump me da o tipo do dado passado

echo 8 / 2 * 3, "<br>";
echo 3 * 8 / 2, "<br>";

// algumas funções de strings
echo '<br>' . strtoupper("upperCase");
echo '<br>' . strtolower("LowerCase");
echo '<br>' . substr("Testando a chamada de substring", 11, 7);
echo '<br>' . str_replace('Corinthians', 'Santos', 'O maior time do brasil é o Corinthians');
echo '<br>' . substr_count('!ABcaBcabc', 'abc');
