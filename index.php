<?php
include('./Ingredient.php');
include('./Ustensile.php');
include('./Appareil.php');
include('./Recette.php');

$ingredients = [
   $chocolat = new Ingredient("chocolat", 250, "gr"),
   $oeuf = new Ingredient("oeuf", 4, "unités"),
   $sucre = new Ingredient("sucre", 100, "gr"),
   $sel = new Ingredient("sel", 1, "gr")
];

$ustensiles = [
    $saladier = new Ustensile("saladierbol", "contient", "verre"),
    $fouet = new Ustensile("fouet", "fouette", "inox"),
    $casserole = new Ustensile("casserole", "chauffe", "inox")
];

$appareils = [
    $batteur = new Appareil("batteur", "mélange"),
    $gaziniere = new Appareil("gaziniere", "cuit"),
    $frido = new Appareil("frigo", "refroidit")
];

$mousseAuChocolat = new Recette($ingredients, $ustensiles, $appareils);
foreach($mousseAuChocolat->getIngredients() as $ingredient) {
    //$ingredient->getName();
    echo "vous aurez besoin de " . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' de ' . $ingredient->getName() . '<br>';
}
foreach($mousseAuChocolat->getUstensiles() as $ustensile) {
    echo "vous allez utiliser une " . $ustensile->getName() . ' en ' . $ustensile->getMateriaux() . ' pour ' . $ustensile->getUtility() . '<br>';
}
foreach($mousseAuChocolat->getAppareils() as $appareil) {
    echo "vous allez utiliser une " . $appareil->getName() . ' pour ' . $appareil->getUtility() . '<br>';
}

//var_dump($mousseAuChocolat->getIngredients());
//var_dump($mousseAuChocolat->getUstensiles());
//var_dump($mousseAuChocolat->getAppareils());
// $mousseAuChocolat->GetIngredients();
//var_dump($mousseAuChocolat);



