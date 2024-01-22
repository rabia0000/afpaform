<?php
session_start();

echo '<pre>';
var_dump($_SESSION);
var_dump($_POST);
echo '</pre>';
require_once '../config.php';
require_once '../models/ride.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Vérification du mot de passe


    if (empty($_POST["date"])) {
        $errors['date'] = "Champs obligatoire.";
    } else {
        $_POST['date'];
    }

    if (empty($_POST['distance'])) {
        $errors['distance'] = "Champs obligatoire.";
    } else {
        $_POST['distance'];
    }

    if (!isset($_POST["transport"])) {
        $errors['transport'] = "Veuillez selectionner un type de transport.";
    }


    // if (empty($errors)) {

    //     if (!Userprofil::checkMailExists($_POST['email'])) {
    //         $errors['email'] = "utilisateur inconnu ";
    //     } else {
    //         //je recupère toutes les infos via la méthode getInfos()
    //         $utilisateurInfos = Userprofil::getInfos($_POST['email']);
    //         // Utilisation de password_verify pour le mdp
    //         if (password_verify($_POST["password"], $utilisateurInfos['user_password'])) {
    //             //ajout de la super global $_SESSION
    //             $_SESSION['pseudo'] = $utilisateurInfos['user_pseudo'];
    //             $_SESSION['nom'] = $utilisateurInfos['user_name'];
    //             $_SESSION['prenom'] = $utilisateurInfos['user_firstname'];
    //             $_SESSION['email'] = $utilisateurInfos['user_email'];
    //             $_SESSION['ddn'] = $utilisateurInfos['user_dateofbirth'];
    //             header('Location: controller-home.php');
    //         } else {
    //             $errors['connexion'] = 'Mauvais mots de passe';
    //         }
    //     }
    // }
}



// var_dump($_POST);





// 1. Rechercher si mail present ds la bdd
// Première étape : à l'aide de PDO faire un select avec un WHERE mail = mail de l'input
// 2. **Si Oui** : récupérer les infos dont le mdp, pour pouvoir comparer  
// - si mdp de passe **Oui**, identification ok  
// - si mdp de passe **Non** : "*Erreur dans le mdp*"
// 3. **Si Non** : "*Identifiant incorrect*"





?>




<?php
include_once('../views/view-ride.php');
?>