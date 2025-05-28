<?php
    class Funcionario {
        private $id;    
        private $nome;
        private $cargo;

        function calculaSalario($horasTrabalhadas, $valorHora) {
            $salario = $horasTrabalhadas * $valorHora;

            return $salario;
        }
    }

    class Gerente extends Funcionario {
        private $cargo;
        private $quantidadeDeColaboradores;

        function calculaSalario($horasTrabalhadas, $valorHora) {
            $valorInicial = $horasTrabalhadas * $valorHora;
            $adicionalGerente = 500;

            $salarioFinal = $valorInicial + $adicionalGerente;

            return $salarioFinal;
        }
    }

    $gerente = new Gerente;

    echo $gerente->calculaSalario(160, 20) . PHP_EOL;
?>