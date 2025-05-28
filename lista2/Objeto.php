<?php
    abstract class Objeto {
        private $altura;
        private $largura;

        function __construct($altura, $largura) {
            $this->altura = $altura;
            $this->largura = $largura;
        }

        function getAltura() {
            return $this->altura;
        }

        function setAltura($altura) {
            $this->$altura = $altura;
        }

        function getLargura() {
            return $this->largura;
        }

        function setLargura($largura) {
            $this->largura = $largura;
        }

        function calculaArea() {
        }
    }

    class Triangulo extends Objeto{
        private $tipo;

        function calculaArea() {
            $area = ($this->getAltura() * $this->getLargura()) / 2;
            return $area;
        }
    }

    class Retangulo extends Objeto {
        function isQuadrado() {
            if ($this->getAltura() == $this->getLargura()) {
                return "É um quadrado";
            }
            else {
                return "É um retângulo";
            }
        }

        function calculaArea() {
            $area = $this->getAltura() * $this->getLargura();
            return $area;
        }
    }

    $triangulo = new Triangulo(10, 20);
    echo $triangulo->calculaArea() . PHP_EOL;

    $retangulo = new Retangulo(20, 20);
    echo $retangulo->isQuadrado() . PHP_EOL;
    echo $retangulo->calculaArea() . PHP_EOL;
?>