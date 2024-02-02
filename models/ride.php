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


    public static function create(string $date, int $distance, int $userId, int $transport)
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
        $query->bindValue(':user', htmlspecialchars($userId), PDO::PARAM_INT);
        $query->bindValue(':transport', htmlspecialchars($transport), PDO::PARAM_INT);

        try {
            $query->execute();
            echo 'Trajet ajouté avec succès !';
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
    /**
     * Methode permettant de récupérer les infos du trajet d'un utilisateur en récupérant son Id 
     * 
     * @param string $userId Id de l'utilisateur
     * 
     * @return array Tableau associatif contenant les infos du trajet de l'utilisateur
     */
    public static function getAllTrajets(int $userId): array
    {
        try {
            // Création d'un objet $db selon la classe PDO
            $bdd = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `ride` NATURAL JOIN `transport` WHERE `user_id` = :user";

            // je prepare ma requête pour éviter les injections SQL
            $query = $bdd->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user', $userId, PDO::PARAM_INT);

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

    public static function deleteTrajet(int $rideId): void
    {
        try {

            // Création d'un objet $db selon la classe PDO
            $bdd = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

            // stockage de ma requete dans une variable
            $sql = "DELETE FROM `ride`  WHERE `ride_id` = :rideId";

            // je prepare ma requête pour éviter les injections SQL
            $query = $bdd->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':rideId', $rideId, PDO::PARAM_INT);

            // on execute la requête
            $query->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
}
