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


    if (empty($errors)) {

        $date = $_POST['date'];
        $distance = $_POST['distance'];
        $user = $_SESSION['user'];
        $transport = $_POST['transport'];

        Ride::create($date, $distance, $user, $transport);
    }
}



?>




<?php
include_once('../views/view-ride.php');
?>