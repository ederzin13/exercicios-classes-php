<?php
    require_once "Pessoa.php";
    require_once "Universidade.php";
    
    $universidade = new Univesidade("UTFPR");
    $faculdade = new Univesidade("Unicentro");

    $pessoa = new Pessoa("eder", $universidade);
    $novaPessoa = new Pessoa("Murilo", $faculdade);
    
    $pessoa->informaNome();
    echo $pessoa->informaUniversidade() . "\n";

    $novaPessoa->informaNome();
    $novaPessoa->informaUniversidade();
?>