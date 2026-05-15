<?php 
class Auto{
    public $Marca;
    public $Modelo;
    public $Color;
    public $Patente;

    public function ImprimirInformacion(){
        echo 'Marca : ' . $this->Marca . '<br>';
        echo 'Modelo : ' . $this->Modelo  . '<br>' ;
        echo 'Color : ' . $this->Color  . '<br>' ;
        echo 'Patente : ' . $this->Patente . '<br>' ;                 
    }
}