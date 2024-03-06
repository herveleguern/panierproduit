<?php
class Panier {
        private $reference;
        private $lesProduits = array();
    
        function __construct($reference) {
            $this->reference = $reference;
            //le nouveau panier est vide.
        }
    
        public function getLesProduits() {
            return $this->lesProduits;
        }
    
        public function ajouterProduit(Produit $unProduit, $quantite) {
            //le Produit et sa quantité dans le Panier
            $this->lesProduits[] = array($unProduit, $quantite);
        }
    }
    
?>