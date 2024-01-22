<?php
class Ride
{

    /**
     * Methode permettant d'entrer un trajet 
     * @param string $date date du trajet
     * @param string $distance distance du trajet
     * @param int $transport le type de transport
     * @return void
     */


    public static function create(string $date, int $distance, int $user, int $transport)
    {
        //connexion à la bdd
        //on crée un nouvelle objet $bdd selon la classe PDO qui prendra des données 

        //mettre le nom de la base de donnnées lors de la creation d'un utilisateur initialement crée sur phpMyAdmin
        // Dans dbname nom de la base de données, user = admin et password = admin 

        $bdd = new PDO('mysql:host=localhost;dbname=' . DBNAME . ';charset=utf8', DBUSERNAME, DBPASSWORD);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        //  value (:value = marqueur nominatif)
        $sql = 'INSERT INTO `ride` (`ride_date`, `ride_distance`, `user_id`, `transport_id`) VALUES (:datee, :distance, :user, :transport)';
        //je prepare ma requete pour eviter les injection sql,  $bdd appelle la methode prepare 
        $query = $bdd->prepare($sql);
        //avec bindValue permet de mettre directement des valeurs sans crée de variable 
        $query->bindValue(':datee', $date, PDO::PARAM_STR);
        $query->bindValue(':distance', htmlspecialchars($distance), PDO::PARAM_INT);
        $query->bindValue(':user', htmlspecialchars($user), PDO::PARAM_INT);
        $query->bindValue(':transport', htmlspecialchars($transport), PDO::PARAM_INT);

        try {
            $query->execute();
            echo 'Utilisateur ajouté avec succès !';
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
