<?php

require_once '../config.php';
require_once '../models/userprofil.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Vérification du mot de passe


    if (empty($_POST["password"]) || strlen($_POST["password"]) < 8) {
        $errors['password'] = "Le mot de passe doit comporter au moins 8 caractères";
    }

    if (empty($_POST["email"])) {
        $errors['email'] = "Champs obligatoire.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse email est invalide.";
    }
    if (empty($errors)) {
        if (!Userprofil::checkMailExists($_POST['email'])) {
            $errors['email'] = "utilisateur inconnu ";
        } else {
            $errors['email'] = "L'utilisateur existe dans la bdd";
        }
    }
}



var_dump($_POST);





// 1. Rechercher si mail present ds la bdd
// Première étape : à l'aide de PDO faire un select avec un WHERE mail = mail de l'input
// 2. **Si Oui** : récupérer les infos dont le mdp, pour pouvoir comparer  
// - si mdp de passe **Oui**, identification ok  
// - si mdp de passe **Non** : "*Erreur dans le mdp*"
// 3. **Si Non** : "*Identifiant incorrect*"





?>




<?php
include_once('../views/view-signin.php');
?>