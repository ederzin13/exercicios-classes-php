<?php
    class Contador {
        private static $valor;

        function __construct($valor) {
            self::$valor = $valor;
        }

        function getValor() {
            return self::$valor;
        }

        function setValor($valor) {
            self::$valor = $valor;
        }

        function zerarContador() {
            $this->setValor(0);
        }

        function incrementar($valorI) {
            $this->setValor(($this->getValor() + $valorI));
        }
    }

    $contador = new Contador(5);
    
    $contador->incrementar(5);

    echo $contador->getValor() . PHP_EOL;

    $contador->zerarContador();

    echo $contador->getValor() . PHP_EOL;
?>