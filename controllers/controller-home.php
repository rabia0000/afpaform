<?php
session_start();
// var_dump($_SESSION);

// var_dump($_SESSION); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/userprofil.php';

// toute ta logique 

if (!$_SESSION['user']) {
    header('Location: controller-signin.php');
}


//views
include_once '../views/view-home.php';
