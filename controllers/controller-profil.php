<?php
session_start();

var_dump($_SESSION); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/userprofil.php';

// toute ta logique ^
$pseudo = $_SESSION['pseudo'];


//views

include_once '../views/view-profil.php';
