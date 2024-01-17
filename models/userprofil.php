<?php
class Userprofil
{

    /**
     * Methode permettant de crée un utilisateur
     * @param int $validate Permet à l'admin de valider l'utilisateur par default 1
     * @param string $name Nom de l'utilisateur
     * @param string $lastname prenom de l'utilisateur
     * @param string $pseudo Pseudo de l'utilisateur
     * @param string $email Email de l'utilisateur
     * @param string $password Password de l'utilisateur
     * @param string $dob DDN de l'utilisateur
     * @param string $password Password de l'utilisateur
     * @param string $enterprise entreprise de l'utilisateur
     * 
     * @return void
     */


    public static function create(int $validate, string $name, string $lastname, string $pseudo, string $email, string $dob, string $password, string $enterprise)
    {
        //connexion à la bdd
        //on crée un nouvelle objet $bdd selon la classe PDO qui prendra des données 

        //mettre le nom de la base de donnnées lors de la creation d'un utilisateur initialement crée sur phpMyAdmin
        // Dans dbname nom de la base de données, user = admin et password = admin 

        $bdd = new PDO('mysql:host=localhost;dbname=' . DBNAME . ';charset=utf8', DBUSERNAME, DBPASSWORD);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        //  value (:value = marqueur nominatif)
        $sql = 'INSERT INTO `userprofil` (`user_validate`, `user_name`, `user_firstname`, `user_pseudo`, `user_email`, `user_dateofbirth`, `user_password`, `enterprise_id`) VALUES (:validate, :nom, :prenom, :pseudo, :email, :ddn, :mot_de_passe, :enterprise_id)';
        //je prepare ma requete pour eviter les injection sql,  $bdd appelle la methode prepare 
        $query = $bdd->prepare($sql);
        //avec bindValue permet de mettre directement des valeurs sans crée de variable 
        $query->bindValue(':validate', $validate, PDO::PARAM_INT);
        $query->bindValue(':nom', htmlspecialchars($name), PDO::PARAM_STR);
        $query->bindValue(':prenom', htmlspecialchars($lastname), PDO::PARAM_STR);
        $query->bindValue(':pseudo', htmlspecialchars($pseudo), PDO::PARAM_STR);

        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':ddn', $dob);
        $query->bindValue(':mot_de_passe', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

        $query->bindValue(':enterprise_id', $enterprise, PDO::PARAM_INT);

        try {
            $query->execute();
            echo 'Utilisateur ajouté avec succès !';
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    /**
     * Methode permettant de vérifier si le mail existe dans la base de données de la table Userprofil
     * 
     * @param string $email Adresse mail de l'utilisateur
     * 
     * @return bool
     */
    public static function checkMailExists(string $email): bool
    {
        // le try and catch permet de gérer les erreurs, nous allons l'utiliser pour gérer les erreurs liées à la base de données
        try {
            // Création d'un objet $db selon la classe PDO
            $bdd = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `userprofil` WHERE `user_email` = :mail";

            // je prepare ma requête pour éviter les injections SQL
            $query = $bdd->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':mail', $email, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le mail n'existe pas
            if (empty($result)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }

    public static function checkPseudoExists(string $pseudo): string
    {
        // le try and catch permet de gérer les erreurs, nous allons l'utiliser pour gérer les erreurs liées à la base de données
        try {
            // Création d'un objet $db selon la classe PDO
            $bdd = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `userprofil` WHERE `user_pseudo` = :pseudo";

            // je prepare ma requête pour éviter les injections SQL
            $query = $bdd->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le pseudo n'existe pas
            if (empty($result)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
}
