<?php

class Numero{
    // Atributo
    private $numero;

    // Constructor
    public function __constructor($numero){
        $this->numero = $numero;
    }

    // Método de acceso
    public function getNumero(){
        return $this->numero;
    }

    // Método de modificación
    public function setNumero ($numero){
        $this->numero = $numero;
    }

    public function obtenerEstado(){
        $numero = $this->getNumero();
        $estado = "";

        switch ($numero){
            case $numero > 0:
                $estado = "El número es positivo";
                break;
            case $numero < 0:
                $estado = "El número es negativo";
                break;
            default:
                $estado = "El número es 0";
                break;
        }

        return $estado;
    }

}