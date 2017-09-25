<?php 

class PontoDePauta
{
    protected $nome;
    protected $descricao;
    protected $encaminhamentos;

    function __construct(
        $nome,
        $descricao,
        array $encaminhamentos
    )
    {
        $this->nome = $nome;
        $this->descricao = $descricao;

        foreach ($encaminhamentos as $encaminhamento) {
            if (!($encaminhamento instanceof Encaminhamento)) {
                throw new AtaException("Um encaminhamento deve ser do tipo encaminhamento");
            }
            $this->encaminhamentos[] = $encaminhamento;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getEncaminhamentos()
    {
        return $this->encaminhamentos;
    }
}