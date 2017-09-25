<?php 
require "autoload.php";
echo "<pre>";

$observacao = new Observacao('vou voltar!');
$reuniao = new ReuniaoOrdinaria();
$paulo = new Responsavel("Paulo");
$encaminhamento1 = new Encaminhamento("Entregar sistema", new DateTime('2017-10-01'), $paulo);
$encaminhamento2 = new Encaminhamento("Disponibilizar sistema",new DateTime('2017-10-15'), $paulo);
$pontoDePautaSistema = new PontoDePauta(
    "Sistema de atas",
    "Descricao sistema de atas",
    array(
        $encaminhamento1,
        $encaminhamento2,
    )
);
$ataReuniao = new Ata(
    $reuniao,
    new DateTime(),
    array($pontoDePautaSistema),
    array($observacao)
);
die(var_dump(
    $ataReuniao->getData()
));