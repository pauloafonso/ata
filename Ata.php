<?php 
class Ata
{
    private $tipoReuniao;
    private $data;
    private $pontosDePauta;
    private $observacoes;

    function __construct(
        TipoReuniao $tipoReuniao,
        DateTime $data,
        array $pontosDePauta,
        array $observacoes = null
    )
    {
        $this->tipoReuniao = $tipoReuniao;
        $this->data = $data;

        foreach ($pontosDePauta as $pontoDePauta) {
            if (!($pontoDePauta instanceof PontoDePauta)) {
                throw new AtaException("Um ponto de pauta deve ser do tipo PontoDePauta");
            }
            $this->pontosDePauta[] = $pontoDePauta;
        }
        if (count($observacoes) > 0) {
            foreach ($observacoes as $observacao) {
                if (!($observacao instanceof Observacao)) {
                    throw new AtaException("Uma observacao deve ser do tipo Observacao");
                }
                $this->observacoes[] = $observacao;
            }
        }
    }

    public function getTipoReuniao()
    {
        return $this->tipoReuniao;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getPontosDePauta()
    {
        return $this->pontosDePauta;
    }
    public function getObservacoes()
    {
        return $this->observacoes;
    }
}