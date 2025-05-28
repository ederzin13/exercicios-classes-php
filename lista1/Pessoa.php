<?php
    date_default_timezone_set("America/Sao_Paulo");

    
    class Pessoa {
        public $nome;
        public $idade;
        public $diaNascimento;
        public $mesNascimento;
        public $anoNascimento;
        
        function __construct($nome, $dia, $mes, $ano) {
            $this->nome = $nome;
            $this->diaNascimento = $dia;
            $this->mesNascimento = $mes;
            $this->anoNascimento = $ano;
        }
        
        //arrumar essa função
        public function calculaIdade() {
            (int) $diaAtual = date("d");
            (int) $mesAtual = date("m");
            (int) $anoAtual = date("Y");

            $this->idade = $anoAtual - $this->anoNascimento;

            if ($this->diaNascimento > $diaAtual && $this->mesNascimento >= $mesAtual) {
                $this->idade--;
            }
        }

        public function informaIdade() {
            return $this->idade;
        }

        public function informaNome() {
            return $this->nome;
        }

        public function ajustaDataNascimento($dia, $mes, $ano) {
            $this->diaNascimento = $dia;
            $this->mesNascimento = $mes;
            $this->anoNascimento = $ano;
            $this->calculaIdade();
        }
    }

    class Univesidade {
        public $nome;

        public function informaNome() {
            return $this->nome;
        }
    }

    $fulano = new Pessoa("Fulano", 25, 5, 2000);

    $cicloPentano = new Pessoa("Ciclo", 28, 11, 2004);
    $aniversariante = new Pessoa("Aniversariante", 27, 5, 2000);

    
    echo $nome = "O nome do objeto 'fulano' é " . $fulano->informaNome() . PHP_EOL;
    
    $cicloPentano->calculaIdade();
    $fulano->calculaIdade();
    $aniversariante->calculaIdade();

    echo $idadeCiclo = $cicloPentano->informaIdade() . "\n";
    echo $idadeFulano = $fulano->informaIdade() . "\n";
    echo $idadeAniversariante = $aniversariante->informaIdade() . "\n";

    $fulano->ajustaDataNascimento(2, 1, 2010);
    echo $idadeFulano = "Idade do fulano altarada: " . $fulano->informaIdade() . "\n";

?>