<?php
session_start();
require_once '../config.php';
require_once '../models/ride.php';

// var_dump($_POST);

if (isset($_POST['delete'])) {
    Ride::deleteTrajet($_POST['rideId']);
    header('Location: controller-historique.php ');
    exit;
} else if (!isset($_POST['ride_id'])) {

    header('Location: controller-historique.php ');
    exit;
}


include_once '../views/view-confirmation_delete.php';
