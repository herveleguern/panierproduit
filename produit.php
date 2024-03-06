<?php
class Produit{
    private $reference;
    private $nom;
    private $prix;
    private $stock;
    
    public function __construct($reference, $nom, $prix, $stock) {
        $this->reference = $reference;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }
    
    public function __toString() {
        return "reference: $this->reference nom: $this->nom prix: $this->prix stock: $this->stock";
    }

}

class Alimentaire extends Produit{
    private $dlc; //date limite de consommation
    
    public function __construct($reference, $nom, $prix, $stock, $dlc) {
        parent::__construct($reference, $nom, $prix, $stock);
        $this->dlc=$dlc;
    }
    
    public function __toString() {
        return parent::__toString()." date limite de consommation $this->dlc";
    }
    
}

class ElectroMenager extends Produit{
    private $dimension; // string largeurxhauteurxprofondeur
    
    public function __construct($reference, $nom, $prix, $stock,$dimension) {
        parent::__construct($reference, $nom, $prix, $stock);
        $this->dimension=$dimension;
    }
    
    public function __toString() {
        return parent::__toString()." dimension: $this->dimension";
    }
}


?>