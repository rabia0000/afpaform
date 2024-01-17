<?php

require_once '../config.php';


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
}

if (empty($errors)) {
    try {

        //connexion à la base de données avec PDO 
        $bdd = new PDO('mysql:host=localhost;dbname=' . DBNAME . ';charset=utf8', DBUSERNAME, DBPASSWORD);
        //Parametre de connexion pour afficher les erreurs 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Récupération des données du formulaire en utilisant la fonction filter_var : nettoye et valide les données d'entrée 
        //utilisateur 
        //filter_var(variable, filter, options)
        // FILTER_SANITIZE_EMAIL : supprime les caractères non valide d'une adresse mail 
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        // $emailRechercher = filter_var($_POST["email"]);


        // Étape 1 : Requête SQL avec une requête préparée pour vérifier si l'e-mail existe
        $requeteEmail = $bdd->prepare("SELECT * FROM userprofil WHERE user_email = :email");
        $requeteEmail->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
        $requeteEmail->execute();

        // Vérification si l'e-mail existe dans la base de données
        $utilisateur = $requeteEmail->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'errors';
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