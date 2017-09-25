<?php 
function carregaClasses($classe)
{
    require $classe . ".php";
}
spl_autoload_register("carregaClasses");