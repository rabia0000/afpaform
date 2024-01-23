<?php

session_start();


var_dump($_SESSION);
var_dump($_POST);

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


    if (empty($errors)) {

        $date = $_POST['date'];
        $distance = $_POST['distance'];
        $userId = $_SESSION['user']['user_id'];
        $transport = $_POST['transport'];

        Ride::create($date, $distance, $userId, $transport);

        header('Location: controller-historique.php');
    }
}








?>




<?php
include_once('../views/view-ride.php');
?>