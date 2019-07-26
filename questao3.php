<?php 

$valcomescala = 'R$994,00' ;
$valsemescala = 'R$1.367,00';

function limpaReais($valor){
 $valor = trim($valor);
 $valor = str_replace(".", "", $valor);
 $valor = str_replace(" ", "", $valor);
 $valor = str_replace("R", "", $valor);
 $valor = str_replace("$", "", $valor);
 $valor = str_replace(",00", "", $valor);
 return $valor;
}


echo "Melhor preço sem escalas". $valsemescala;

echo "Melhor preço sem escalas". $valcomescala;

 ?>