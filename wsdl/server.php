<?php

if(!extension_loaded('soap')){
      dl('php_soap.dll');
}

ini_set('soap.wsdl_cache_enabled', '0');

$server = new SoapServer('http://localhost:8080/www/wsdl/aritmetica.wsdl');

function sumar($operando1, $operando2){
      return $operando1 + $operando2;
}

function restar($operando1, $operando2){
      return $operando1 - $operando2;
}

$server->AddFunction('sumar');
$server->AddFunction('restar');
$server->handle();

?>