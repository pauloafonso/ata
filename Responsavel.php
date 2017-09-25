<?php
class Responsavel
{
    protected $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}