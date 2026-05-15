<?php 
require_once 'modelo/modelo.php';


$a = new Auto();
$a->Marca = $_GET['Fiat'];
$a->Modelo = 'Argo';
$a->Color = 'Blanco ';
$a->Patente  = 'ABC123CD';
$a->ImprimirInformacion();

?>
