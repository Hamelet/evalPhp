<?php
require "vehicule.php";
/**
 * 
 */
class VSAV extends vehicule {

    /**
     * Default constructor
     */
    public function __construct($nom) {
        vehicule::__construct(  $echelle = true);
    }

    /**
     * @return
     */
    public function sirene(string $pVehicule){
        return "pimpom";
    }

    function se_deplacer(string $pVehicule){
        return " je me déplace trés vite ";
    }

}