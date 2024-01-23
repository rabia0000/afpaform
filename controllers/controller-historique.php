<?php
session_start();

// var_dump($_SESSION); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/ride.php';


// toute ta logique ^
if (!$_SESSION['user']) {
    header('Location: controller-signin.php');
    exit();
}

$trajets = Ride::getAllTrajets($_SESSION['user']['user_id']);

echo '<pre>';
var_dump($trajets);
echo '</pre>';
//views

include_once '../views/view-historique.php';
