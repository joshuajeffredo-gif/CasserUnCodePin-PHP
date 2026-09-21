<?php

// On enregistre l'heure de départ pour calculer le temps total d'exécution
$debut = microtime(true);

echo "Début du programme\n";

// Génération d'un code PIN aléatoire compris entre 0 et 9999
$codeSecret = rand(0, 9999);

// Variables de contrôle : on indique si le code a été trouvé et on teste les valeurs une par une
$trouve = false;
$i = 0;

// On essaie toutes les combinaisons possibles jusqu'à 9999
while ($i < 10000 && $trouve == false) {

    // Affiche la tentative en cours pour suivre le processus de recherche
    echo $i . " ";

    // Si la tentative correspond au code secret, on arrête la recherche
    if ($i == $codeSecret) {
        $trouve = true;
        echo "\nCode trouvé : " . $i . "\n";
    }

    // On passe à la valeur suivante
    $i++;
}

// On calcule la durée totale du programme
$fin = microtime(true);
$duree = $fin - $debut;

echo "Fin du programme\n";
echo "Durée : " . $duree . " secondes\n";

?>