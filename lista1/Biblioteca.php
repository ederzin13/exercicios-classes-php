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

    $livroPopular = new Livro("Jurassic Park");

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

    //bruno rafael chega primeiro e empresta o livro na biblioteca
    $brunoRafael = new Pessoa("Bruno Rafael", "Rua do bruno 10", "breno@gamil.com", "12344321");
    
    $brunoRafael->aluga($livroPopular);

    echo $brunoRafael->getNome() . " está em posse de " . $brunoRafael->getLivroEmPosse()->getNome() . "\n\n";

    //brendon chega depois e tenta emprestar o mesmo, sem sucesso
    $brendoNatan = new Pessoa("Brendo Natan Ramos", "Rua do Brendon", "Bruno@gamil.com", "98761234");
    $brendoNatan->aluga($livroPopular);

    //bruno lê bem rápido e logo devolve o livro
    $brunoRafael->devolve($livroPopular);

    //finalmente, brendon consegue pegar jurassic park na biblioteca
    $brendoNatan->aluga($livroPopular);

    $brunoRafael->getLivroEmPosse(); //deve retornar undefined

?>