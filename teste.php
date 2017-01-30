<?php

 class Teste
 {
    private $teste;

    public function __construct($teste)
    {
        $this->teste = $teste;
    }
    public function getTeste()
    {
        return $this->teste;
    
    }
    public function setTeste($teste)
    {
        $this->teste = $teste;
    }

 }
