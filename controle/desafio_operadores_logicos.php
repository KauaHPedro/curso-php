<div class="titulo">Desafio Operadores Lógicos</div>

<!--
Dois trabalhos - terça  e quinta
- Se os dois forem executos = tv 50 e sorvete
- Se apenas um for executado = tv 32 e sorvete
- nenhum = fica em casa
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1" <?= isset($_POST['t1']) && $_POST['t1'] == '1' ? 'selected' : '' ?>>Executado</option>
            <option value="0" <?= isset($_POST['t1']) && $_POST['t1'] == '0' ? 'selected' : '' ?>>Não executado</option>
        </select>

    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1" <?= isset($_POST['t2']) && $_POST['t2'] == '1' ? 'selected' : '' ?>>Executado</option>
            <option value="0" <?= isset($_POST['t2']) && $_POST['t2'] == '0' ? 'selected' : '' ?>>Não executado</option>
        </select>

    </div>
    <button>Executar</button>
</form>

<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    option {
        font-size: 1.2rem;
    }

    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

$t1 = $_POST['t1'] == '1';
$t2 = $_POST['t2'] == '1';

if($t1 && $t2){
    echo "Compraremos uma TV de 50' e tomaremos sorvete <br>";
} else if ($t1 xor $t2) {
    echo "Compraremos uma TV de 32' e tomaremos sorvete <br>";
} else {
    echo "Ficaremos em casa <br>";
}

?>
