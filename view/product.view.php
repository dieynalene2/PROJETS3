<?php
function listerProduits(array $products) : void {
    foreach ($products as $product){
        echo "Libellé: {$product["libele"]}\n";
    }
}