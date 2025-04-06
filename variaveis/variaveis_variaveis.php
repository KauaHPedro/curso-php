<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';

// Variáveis de variáveis é como se com $$ eu criasse uma segunda variável com o nome do conteúdo da primeira

echo "$a {$$a} {$valorA}";