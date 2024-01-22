<?php
session_start();

// Détruire toutes les données de session
session_destroy();

// Rediriger vers la page de connexion, par exemple
header("Location: controllers/controller-signin.php");
exit();
