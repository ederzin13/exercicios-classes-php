<?php
    class Univesidade {
        public $nome;

        function __construct($nome) {
            $this->nome = $nome;
        }

        function informaNome() {
            return $this->nome;
        }
    }
?>