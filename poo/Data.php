<div class="titulo">Data</div>

<?php

class Data {
    private int $dia;
    private int $mes;
    private int $ano;

    private $atual;

    public function __construct(int $dia, int $mes, int $ano) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->atual = date("H:i:s");
    }

    public function __destruct() {
        echo "Fim!";
    }

    public function imprimirData() : string {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }

    /**
     * @return false|string
     */
    public function getAtual() {
        return $this->atual;
    }
}

$data = new Data(01, 01, 1970);
echo $data->imprimirData();
echo "<br>";
echo $data->getAtual();
echo "<br>";

unset($data);
//UNSET chama o Destrutor, atribuir o valor null tbm