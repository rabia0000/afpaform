<?php
session_start();

var_dump($_SESSION); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/userprofil.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // toute ta logique
}

echo $_SESSION['pseudo'];
//views
include_once '../views/view-home.php';
