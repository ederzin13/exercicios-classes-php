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

    $universidade = new Univesidade("UTFPR");
    $faculdade = new Univesidade("Unicentro");

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

    $pessoa = new Pessoa("eder", $universidade);
    $novaPessoa = new Pessoa("Murilo", $faculdade);
    
    $pessoa->informaNome();
    echo $pessoa->informaUniversidade() . "\n";

    $novaPessoa->informaNome();
    $novaPessoa->informaUniversidade();
?>