<?php
try{
    //connexion à la base 
    $bdd = new PDO('mysql:host=localhost;dbname=metro_boulot_dodo;charset=utf8', 'admin', 'admin');
    
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erreur: ". $e->getMessage();
    die();
}

?>


