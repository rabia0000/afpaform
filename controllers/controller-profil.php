<?php
session_start();

// var_dump($_SESSION); /// pour check si c good :)
//config
require_once '../config.php';
// models
include_once '../models/userprofil.php';

// toute ta logique ^
$pseudo = $_SESSION['pseudo'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$ddn = $_SESSION['ddn'];




//views

include_once '../views/view-profil.php';
