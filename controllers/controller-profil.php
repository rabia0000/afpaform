<?php
session_start();

var_dump($_SESSION['user']); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/userprofil.php';

// toute ta logique ^
if (!$_SESSION['user']) {
    header('Location: controller-signin.php');
}


//views

include_once '../views/view-profil.php';
