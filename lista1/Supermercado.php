<?php
    class Produto {
        public $preco;
        public $quantidadeEstoque;

        function __construct($preco, $quantidade) {
            $this->preco = $preco;
            $this->quantidadeEstoque = $quantidade;
        }

        function getPreco() {
            return $this->preco;
        }

        function setPreco($preco) {
            $this->preco = $preco;
        }

        function getQuantidade() {
            return $this->quantidadeEstoque;
        }

        function setQuantidade($quantidade) {
            $this->quantidadeEstoque = $quantidade;
        }
    }
    
    class Pedido {
        public $itens; 
        public $tipoPagamento = "Dinheiro" || "Cheque" || "Cartão";

        function __construct($itens, $tipoPagamento) {
            $this->itens[] = $itens;
            $this->tipoPagamento = $tipoPagamento;
        }
        
        function getItens() {
            return $this->itens;
        }

        function setItens($itens) {
            $this->itens[] = $itens;
        }
    }

    class Pagamento {
        public $tipoPagamento = "Dinheiro" || "Cheque" || "Cartão";
    }

    $novoPedido = new Pedido(["Beterraba" => 10, "Rabanete" => 5, "Cenoura" => 17], "Dinheiro");

    print_r($novoPedido);
?>