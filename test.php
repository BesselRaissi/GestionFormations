<?php

$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];
foreach ($formations as $formation) {
    echo $formation . "<br>";
}

$utilisateur = [
    "nom"      => "Raissi",
    "prenom"   => "Bessel",
    "email"    => "bessel.raissi@edu.isetcom.tn",
    "formation" => "Sécurité",
    "age"      => 21          // ← nouveau champ
];

echo "Nom : "       . $utilisateur["nom"]      . "<br>";
echo "Prénom : "    . $utilisateur["prenom"]   . "<br>";
echo "Email : "     . $utilisateur["email"]    . "<br>";
echo "Formation : " . $utilisateur["formation"]. "<br>";
echo "Âge : "       . $utilisateur["age"]      . "<br>";

// ── Validation de l'âge ──────────────────────────────
if (!is_numeric($utilisateur["age"])) {
    echo "Erreur : L'âge doit être un nombre.<br>";
} elseif ($utilisateur["age"] <= 0) {
    echo "Erreur : L'âge doit être supérieur à 0.<br>";
} else {
    echo "Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . " !<br>";
}

// ── Tableau des formations ───────────────────────────
$formations = [
    ["nom" => "Développement Web", "duree" => "3 mois"],
    ["nom" => "Réseaux",           "duree" => "2 mois"],
    ["nom" => "Sécurité",          "duree" => "4 mois"]
];
foreach ($formations as $f) {
    echo "Formation : " . $f["nom"] . " - Durée : " . $f["duree"] . "<br>";
}