<?php
//models 

session_start();
var_dump($_SESSION['user']);
require_once '../config.php';
require_once '../models/userprofil.php';
require_once '../models/enterprise.php';

// detecte un submit du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // var_dump($_POST);
    // var_dump($_FILES);

    // recuperer controle sign up 
    $nom =  $_POST['name'];
    $lastname = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $ddn = $_POST['dob'];
    $describ = $_POST['describ'];
    $enterpriseId = "2";
    $userId = $_SESSION['user']['user_id'];
    $photo = $_FILES['photo']['name'];

    //mise a jour des info dans la bdd

    Userprofil::updateInfos($userId, $nom, $lastname, $pseudo, $describ, $ddn, $email, $enterpriseId, $photo);

    // modification de la la variable de session avec les nouvelles info de la bdd 
    $_SESSION['user'] = Userprofil::getInfos($email);


    header("location: controller-profil.php");
}
include_once '../views/view-update.php';
