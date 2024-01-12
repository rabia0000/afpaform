<?php
require_once('../connect.php');
// Vérification des données postées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Vérification du nom
    if (empty($_POST["nom"])) {
        $errors['nom'] = "Champs obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["nom"])) {
        $errors['nom'] = "Le nom est invalide.";
    }

    // Vérification du prénom
    if (empty($_POST["prenom"])) {
        $errors['prenom'] = "Champs obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["nom"])) {
        $errors['prenom'] = "Le nom est invalide.";
    }

    if(empty($_POST["pseudo"])){
        $errors['pseudo'] ="pseudo obligatoire.";
    }

    // Vérification de l'email
    if (empty($_POST["email"])) {
        $errors['email'] = "Champs obligatoire.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse email est invalide.";
    }

    // Vérification de la date de naissance
    if (empty($_POST["dob"])) {
        $errors['dob'] = "La date de naissance est obligatoire.";
    } else {
        // Ajout de la date de naissance
        $dob = $_POST["dob"];
    }

    // Vérification du mot de passe
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if (empty($password) || strlen($password) < 8 || $password !== $confirm_password) {
        $errors['password'] = "Le mot de passe doit comporter au moins 8 caractères et correspondre.";
    }

    // Vérification si la case CGU a bien été cocher 
   
    if (!isset($_POST["cgu"])) {
       
        $errors['cgu'] = "Veuillez accepter les CGU pour continuer.";
    
    } 

    if (!empty($errors['cgu'])) {
        echo $errors['cgu'];
    }
    
    $sql = 'INSERT INTO userprofil (user_name, user_firstname, user_pseudo, user_email, user_dateofbirth, user_password) VALUES (:nom, :prenom, :pseudo, :email, :ddn, :mot_de_passe)';
    $query = $bdd->prepare($sql);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':pseudo', $pseudo);
    $query->bindParam(':email', $email);
    $query->bindParam(':ddn', $dob);
    $query->bindParam(':mot_de_passe', $mot_de_passe);

    try {
        $query->execute();
        echo 'Utilisateur ajouté avec succès !';
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    // Redirection vers le formulaire si la requête n'est pas de type POST
    header("Location: view-signup.php");
    exit;
}
  
   


    // Affichage des erreurs
    // Si aucune erreur détectée
    if (empty($errors)) {
        // Afficher la synthèse des informations et le message de confirmation
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
       

        // Cacher le formulaire
        $formHidden = true;

        // Envoyer le mail de confirmation (simulation ici)
        $message = "Bonjour $prenom $nom, votre inscription a bien été enregistrée.";
        // Envoi du mail (à remplacer par votre code d'envoi de mail)
        // mail($email, 'Confirmation d\'inscription', $message);

        // Afficher la synthèse des informations et le message de confirmation
        include('../views/view-summary.php');
        exit; // Arrêter l'exécution du script
    }

?>
<?php
// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-signup.php');
?>