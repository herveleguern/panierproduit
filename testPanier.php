<?php
require_once 'produit.php';
require_once 'panier.php';

$bic = new Produit('bic', 'bic bleu', 1, 40);
$compPomme= new Alimentaire('compotePomme','compote pomme pack8', 8,76,new DateTime('2024-03-20'));
$four=new ElectroMenager('lg106','four micro-ondes 1000w',200,7,'50x20x50');

$unPanier=new Panier('p001');

$unPanier->ajouterProduit($bic,1);
$unPanier->ajouterProduit($compPomme,1);
$unPanier->ajouterProduit($four,1);
var_dump($unPanier);

?>