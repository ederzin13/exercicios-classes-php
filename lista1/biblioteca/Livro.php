<?php
    class Livro {
        private $nome;
        private $autor;
        private $numPaginas;
        private $disponibilidade = 1;
        private Pessoa $quemAlugou;
        
        function __construct($nome) {
            $this->nome = $nome;
        }
    
        function getNome() {
            return $this->nome;
        }

        function getDisponibilidade() {
            return $this->disponibilidade;
        }

        function setDisponibilidade($isDisponivel) {
            $this->disponibilidade = $isDisponivel;
        }

        function isAlugado() {
            if ($this->disponibilidade == 0) {
                echo $this->getNome() . " não está disponível\n";
                return true;
            }
        }
    }
?>