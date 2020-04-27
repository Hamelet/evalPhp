<?php
declare(strict_types=1);


/**
 * 
 */
class vehicule {

    /**
     * 
     */
    public string $nom;

    
    /**
     * 
     */
    public string $echelle;
    /**
     * Default constructor
     */
    public function __construct(string $nom, bool $echelle = true) {
        $this->nom = $nom;
        $this->echelle = $echelle;
    }

    /**
     * @return
     */
    public function sirene(string $pVehicule){
        return "pimpon";
    }

    /**
     * @return
     */
    public function se_déplacer(string $pVehicule) {
        // TODO implement here
        return ;
    }

    /**
     * @return
     */
    public function getNom() {
        // TODO implement here
        return null;
    }

    /**
     * @param $value
     */
    public function setNom($value) {
        // TODO implement here
    }

    /**
     * @return
     */
    public function getEchelle() {
        // TODO implement here
        return false;
    }

    /**
     * @param $value
     */
    public function setEchelle($value) {
        // TODO implement here
    }

}