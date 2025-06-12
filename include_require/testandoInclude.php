<div class="titulo">Testando Include e Require</div>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('/home/kaua/curso-php/poo/Funcionario.php');

$pessoa = new Pessoa("Kauã", 21);
echo $pessoa->getNome();
echo "<br>";

$funcionario = new Funcionario("Hugo", 21, 8000);
echo $funcionario->seApresentar();
