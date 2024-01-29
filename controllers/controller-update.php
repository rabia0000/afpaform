<?php
//models 

session_start();
var_dump($_SESSION['user']);
require_once '../config.php';
require_once '../models/userprofil.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {




    $nom =  $_POST['name'];
    $lastname = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $ddn = $_POST['dob'];
    $describ = $_POST['describ'];
    $enterpriseId = 2;
    $userId = $_SESSION['user']['user_id'];
    $photo = "rabia.jpeg";

    Userprofil::updateInfos($userId, $nom, $lastname, $pseudo, $describ, $ddn, $email, $enterpriseId, $photo);
}
include_once '../views/view-update.php';
