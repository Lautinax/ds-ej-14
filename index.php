<?php 

require_once 'modelo/auto.php';


$a = new Auto();
$a->Marca = 'Fiat';
$a->Modelo = 'Argo';
$a->Color = 'Blanco ';
$a->Patente  = 'ABC123CD';
$a->ImprimirInformacion();

?>
