<div class="titulo">Desafio Tabela</div>

<?php

$array = [
  [1, 2, 3, 4, 5],
  [6, 7, 8, 9, 10],
  [11, 12, 13, 14, 15],
  [16, 17, 18, 19, 20]
];

foreach ($array as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}

?>

<table>
    <?php
        for($i = 0; $i < count($array); $i++) {
            if ($i % 2 == 0) {
                echo "<tr>";
            } else {
                echo "<tr style='background-color: #EEE'>";
            }
            for($j = 0; $j < count($array[$i]); $j++) {
                echo "<td>{$array[$i][$j]}</td>";
            }
        }
        echo "</tr>";

    ?>
</table>

<hr><hr>

<form action="#" method="post">

    <label for="linhas">Número de linhas:</label>
    <input type="number" id="linhas" name="linhas" min="1" required>
    <br>

    <label for="colunas">Número de colunas:</label>
    <input type="number" id="colunas" name="colunas" min="1" required>
    <br>

    <input type="submit" value="Gerar Tabela">

</form>

<hr><hr>

<table>
    <?php
        $contador = 1;
        for($i = 0; $i < $_POST['linhas']; $i++) {
            if ($i % 2 == 0) {
                echo "<tr>";
            } else {
                echo "<tr style='background-color: #EEE'>";
            }
            for($j = 0; $j < $_POST['colunas']; $j++) {
                echo "<td>{$contador}</td>";
                $contador++;
            }
        }
        echo "</tr>";

    ?>
</table>

<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid black;
    }

    table td {
        padding: 10px 20px;
    }
</style>
