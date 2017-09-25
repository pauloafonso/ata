<?php
class Encaminhamento
{
    protected $descricao;
    protected $dataEntrega;
    protected $responsavel;

    function __construct(
        $descricao,
        $dataEntrega,
        Responsavel $responsavel
    )
    {
        $this->descricao = $descricao;
        $this->dataEntrega = $dataEntrega;
        $this->responsavel = $responsavel;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }
    public function getResponsavel()
    {
        return $this->responsavel;
    }
}