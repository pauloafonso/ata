<?php 

class Observacao
{
    protected $texto;

    function __construct($texto)
    {
        $this->texto = $texto;
    }

    public function getTexto()
    {
        return $this->texto;
    }
}