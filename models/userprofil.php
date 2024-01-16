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
}
