<?php
// // on se connecte a la base 
// require_once('connect.php');
// $sql = 'SELECT * FROM `userprofil`';
// //on prépare la requete 
// $query = $bdd->prepare($sql);

// //on execute 
// $query->execute();

// //on stocke le resultat dans un tableau associatif 
// $resultat = $query->fetchAll(PDO::FETCH_ASSOC);

// //affiche le resultat 
// // var_dump($resultat);

// //
// require_once('close.php');

// Redirection vers le contrôleur
header("Location: controllers/controller-signup.php");
exit;
?>