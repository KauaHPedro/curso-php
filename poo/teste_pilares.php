<div class="titulo">Teste Pilares OOP</div>

<?php

class Carro {
    private string $marca;
    private int $ano;

    public function __construct(string $marca, int $ano) {
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function barulhoMotor(): string {
        return "Vrum";
    }

    public function ligarCarro(Carro $carro): string {
        return $this->barulhoMotor();
    }
}

trait declarandoTrait {
    public function testandoTrait() {
        return 'Trait Ok';
    }
}

trait declarandoTrait2 {
    public function testandoTrait() {
        return 'Trait Substituta Ok';
    }
}

class Civic extends Carro {
    public function __construct($marca, $ano) {
        parent::__construct($marca, $ano);
    }

    public function barulhoMotor(): string {
        return "Vruuuuuuuuuuuum";
    }
}

class Ferrari extends Carro {

    use declarandoTrait, declarandoTrait2 {
        declarandoTrait2::testandoTrait insteadof declarandoTrait;
        declarandoTrait::testandoTrait as teste;
    }
    public function __construct($marca, $ano) {
        parent::__construct($marca, $ano);
    }

    public function barulhoMotor(): string {
        return "VRUUUUUUUUUUUUUUUUUUUUUUUM";
    }

    public function apresentar() {
        echo $this;
    }

    public function __toString() {
        return $this->getMarca();
    }

    /*

    No PHP tem alguns métodos mágicos tbm
    Alguns deles são o __get, que executa quando eu tentar acessar um atributo que não existe
    O __set que executa quando eu tento setar um valor num atributo que não existe
    O __call executa quando eu tento executar um metodo que não existe
    O construtor, destrutor e toString sao metodos mágicos
    São mais lentos, então só usar em situações bem específicas
    */
}

$honda = new Civic('Honda', 2018);
$ferrari = new Ferrari('Ferrari', 2018);
echo $honda->ligarCarro($honda);
echo "<br>";
echo $ferrari->ligarCarro($ferrari);
echo "<br>";
echo $ferrari->testandoTrait();
echo "<br>";
echo $ferrari->teste();
echo "<br>";
echo $ferrari->apresentar();

