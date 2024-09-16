<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade)
    {
        echo "O Carro Acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O Veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O Veículo engatou a marcha " . $marcha;
    }

}

?>