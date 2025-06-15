<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__;

function exemploNamespace(int $a, int $b): int {
    return $a + $b;
}
