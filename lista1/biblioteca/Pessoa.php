<?php
    class Pessoa {
        private $nome;
        private $endereco;
        private $email;
        private $telefone;
        private $livroEmPosse;

        function __construct($nome, $endereco, $email, $telefone) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getEndereco() {
            return $this->endereco;
        }

        function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        function getEmail() {
            return $this->email;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getLivroEmPosse() {
            return $this->livroEmPosse;
        }

        function setLivroEmPosse(Livro $emPosse) {
            $this->livroEmPosse = $emPosse;
        }

        function aluga(Livro $livro) {
            if (!$livro->isAlugado()) {
                echo $this->getNome() . " alugou " . $livro->getNome() . PHP_EOL;
                $this->setLivroEmPosse($livro);
                $livro->setDisponibilidade(0);
            }
        }

        function devolve(Livro $livro) {
            echo $this->getNome() . " devolveu " . $this->livroEmPosse->getNome() . PHP_EOL;
            $this->livroEmPosse->setDisponibilidade(1);
            unset($this->livroEmPosse);
        }
    }
?>