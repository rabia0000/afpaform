<?php
require_once('../connect.php');
// Vérification des données postées depuis le formulaire
// $_SERVER super globals affiche toute les informations nottaments resquest_method 
    //declanche la logique 
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // je créer un tableau d'erreur vide 
    $errors = [];

    // Vérification du nom DOIT AVOIR LE MEME NAME QUE DANS LE VIEW-SIGNUP
    if (empty($_POST["name"])) {
        //arrayname["key"]= "value";
        $errors['name'] = "Champs obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["name"])) {
        $errors['name'] = "Le nom est invalide.";
    }

    // Vérification du prénom
    if (empty($_POST["prenom"])) {
        $errors['prenom'] = "Champs obligatoire.";
        //si ça ne match pas !preg_match alors tableau d'erreur
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["prenom"])) {
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

    //veriffication du select 
    if(!isset($_POST["enterprise"])) {
        $errors['enterprise'] = "Veuillez selectionner une entreprise";
    }

    // Vérification si la case CGU a bien été cocher 
   
    if (!isset($_POST["cgu"])) {
       
        $errors['cgu'] = "Veuillez accepter les CGU pour continuer.";
    
    } 

    if (!empty($errors['cgu'])) {
        echo $errors['cgu'];
    }
    $num = 1;
    $photo= 3;
    $enter = 2;
    $describ = "balabla";
    var_dump($errors);
    if (empty($errors)){
        $sql = 'INSERT INTO userprofil (user_validate, user_name, user_firstname, user_pseudo, user_describ, user_email, user_dateofbirth, user_password, user_photo, enterprise_id) VALUES (:validate, :nom, :prenom, :pseudo, :describ, :email, :ddn, :mot_de_passe, :photo, :enterprise_id)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':validate',$num, PDO::PARAM_INT); 
        $query->bindParam(':nom', $_POST['name']);
        $query->bindParam(':prenom', $_POST['prenom']);
        $query->bindParam(':pseudo',$_POST['pseudo']);
        $query->bindParam(':describ', $describ, PDO::PARAM_STR);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':ddn', $dob);
        $query->bindParam(':mot_de_passe', $_POST['password']);
        $query->bindParam(':photo',$photo, PDO::PARAM_INT); 
        $query->bindParam(':enterprise_id',$enter, PDO::PARAM_INT); 
    
        try {
            $query->execute();
            echo 'Utilisateur ajouté avec succès !';
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    } 

}
   
?>
<?php
// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-signup.php');
?>