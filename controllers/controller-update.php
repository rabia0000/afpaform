<?php
//models 

session_start();
var_dump($_SESSION['user']);

require_once '../config.php';
require_once '../models/userprofil.php';
require_once '../models/enterprise.php';


// detecte un submit du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // var_dump($_POST);
    // var_dump($_FILES);


    if ($_FILES["photo"]['error'] == 0) {



        // photo profil
        $target_dir = "../assets/photo/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["photo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES['photo']["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $photo = $_FILES['photo']['name'];
    } else {
        $photo =  $_SESSION["user"]["user_photo"];
    }



    header("location: controller-profil.php");
    // recuperer controle sign up 
    $nom =  $_POST['name'];
    $lastname = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $ddn = $_POST['dob'];
    $describ = $_POST['describ'];
    $enterpriseId = $_POST['enterprise'];
    $userId = $_SESSION['user']['user_id'];


    //mise a jour des info dans la bdd

    Userprofil::updateInfos($userId, $nom, $lastname, $pseudo, $describ, $ddn, $email, $enterpriseId, $photo);

    // modification de la la variable de session avec les nouvelles info de la bdd 
    $_SESSION['user'] = Userprofil::getInfos($email);
}
include_once '../views/view-update.php';
