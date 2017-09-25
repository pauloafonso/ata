<?php 
class ReuniaoOrdinaria implements TipoReuniao
{
    private $nome;

    function __construct()
    {
        $this->nome = 'Reunião Ordinária';
    }

    public function getNome()
    {
        return $this->nome;
    }
}