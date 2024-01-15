<?php
try{
    //connexion à la bdd
    //on crée un nouvelle objet $bdd selon la classe PDO qui prendra des données 

    //mettre le nom de la base de donnnées lors de la creation d'un utilisateur initialement crée sur phpMyAdmin
    // Dans dbname nom de la base de données, user = admin et password = admin 

    $bdd = new PDO('mysql:host=localhost;dbname=metro_boulot_dodo;charset=utf8', 'admin', 'admin');
    var_dump($bdd);
    
    // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erreur: ". $e->getMessage();

    //ça s'arrete = die();
    die();
}

?>


