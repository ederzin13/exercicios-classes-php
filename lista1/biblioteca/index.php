<?php
    include "Pessoa.php";
    include "Livro.php";
    
    $livroPopular = new Livro("Jurassic Park");

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