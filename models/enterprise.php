
<?php

class Enterprise
{
    /**
     * Methode permettant d'afficher toute les entreprises
     
     * @return void
     */


    public static function getAllEnterprise()
    {

        try {
            // Création d'un objet $db selon la classe PDO
            $bdd = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

            // stockage de ma requete dans une variable
            $sql = "SELECT `enterprise_id`, `enterprise_name` FROM `enterprise`";

            // je prepare ma requête pour éviter les injections SQL
            $query = $bdd->prepare($sql);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable //fech 1 ligne fetchAll plusieurs lignes
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            // on retourne le résultat
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
}
