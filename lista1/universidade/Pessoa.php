<?php
    class Pessoa {
        public $nome;
        public Univesidade $universidade;

        function __construct($nome, $universidade) {
            $this->nome = $nome;
            $this->universidade = $universidade;
        }

        function informaNome() {
            echo "Meu nome é " . $this->nome . PHP_EOL;
        }

        function informaUniversidade() {
            echo "Trabalho na " . $this->universidade->informaNome() . PHP_EOL;
        }
    }
?>