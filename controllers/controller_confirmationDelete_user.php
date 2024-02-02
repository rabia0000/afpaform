<?php
session_start();
require_once '../config.php';
require_once '../models/userprofil.php';

// var_dump($_POST);

if (isset($_POST['delete'])) {
    Userprofil::deleteUser($_POST['userId']);
    header('Location: controller-signin.php ');
    exit;
} else if (!isset($_POST['user_id'])) {

    header('Location: controller-update.php ');
    exit;
}


include_once '../views/view-confirmationDelete_user.php';
