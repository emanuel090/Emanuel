<?php
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }

    public function acelerar() {
        echo "O veículo está acelerando.<br>";
    }
}

class Carro extends Veiculo {
    public function exibirDetalhes() {
        echo "Detalhes do Carro:<br>";
        parent::exibirDetalhes();
    }

    public function acelerar() {
        echo "O carro está acelerando rapidamente!<br>";
    }
}

class Moto extends Veiculo {
    public function exibirDetalhes() {
        echo "Detalhes da Moto:<br>";
        parent::exibirDetalhes();
    }

    public function acelerar() {
        echo "A moto está acelerando velozmente!<br>";
    }
}

// Instancia objetos das classes Carro e Moto
$carro = new Carro("Toyota", "Corolla", 2020);
$moto = new Moto("Honda", "CBR", 2019);

echo "<h2>Informações do Carro:</h2>";
$carro->exibirDetalhes();
$carro->acelerar();

echo "<h2>Informações da Moto:</h2>";
$moto->exibirDetalhes();
$moto->acelerar();
?>