<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Modification du profil </title>
    <style>
        /* Définir la hauteur de la page pour centrer le contenu */
        html,
        body {
            height: 100%;
        }

        /* Centrer le contenu verticalement */
        body {
            /* display: flex;
            align-items: center;
            justify-content: center; */
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('../assets/img/route.jpg');

        }

        .card-body {
            background-color: #cdeabc;
        }
    </style>
</head>

<body class="">
    <!-- Header -->

    <form class="row" method="POST" action="../controllers/controller-update.php" novalidate enctype="multipart/form-data">
        <header>
            <!-- Votre code pour l'en-tête -->
        </header>
        <div class="container ">
            <div class="row justify-content-center align-item-center">
                <div class="col-lg-4">
                    <div class="card shadow-lg">
                        <div class="card-body  p-4">
                            <h2 class="card-title text-center mb-4 ">Modification profil</h2>


                            <label class="fs-5" for="nom">Ajouter une photo profil:</label><br><br>
                            <input type="file" name="photo" id="photo" value="<?= $_SESSION['user']['user_photo'] ?>"><br><br>


                            <label class="fs-5" for="nom">Nom:</label><br>
                            <input class="col-12" type="text" id="nom" name="name" value="<?= $_SESSION['user']['user_name'] ?>">


                            <label class="fs-5" for="prenom">Prénom:</label><br>
                            <input class="col-12" type="text" id="prenom" name="prenom" value="<?= $_SESSION['user']['user_firstname'] ?>">


                            <label class="fs-5" for="pseudo">Pseudo:</label><br>
                            <input class="col-12" type="text" id="prenom" name="pseudo" value="<?= $_SESSION['user']['user_pseudo']  ?>">


                            <label class="fs-5" for="email">Courriel:</label><br>
                            <input class="col-12" type="email" id="email" name="email" value="<?= $_SESSION['user']['user_email'] ?>">



                            <label class="fs-5" for="dob">Date de naissance:</label><br>
                            <input class="col-12" type="date" id="dob" name="dob" value="<?= $_SESSION['user']['user_dateofbirth'] ?>">

                            <select class="fs-4 col-12 text-center" name="enterprise" id="enterprise"><br>
                                <option value="" disabled selected>Selectionner une entreprise</option>
                                <?php foreach (Enterprise::getAllEnterprise() as $enterprise) { ?>
                                    <option value="<?= $enterprise['enterprise_id']  ?>" <?= $enterprise['enterprise_id'] = $_SESSION['user']['enterprise_id'] ? 'selected' : '';  ?>><?= $enterprise['enterprise_name'] ?></option>
                                <?php } ?>
                            </select>


                            <label class="fs-5" for="dob">Description:</label><br>
                            <textarea cols="30" rows="10" name="describ"><?= $_SESSION['user']['user_describ'] ?></textarea>


                            <!-- isset permet de voir si la variable existe  -->



                            </span><br><br><br>




                            <br>
                            <button>Modifier</button>
                            <a class="btn" href="../controllers/controller-profil.php">Annuler</a>





    </form>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Footer -->
    <footer>
        <!-- Votre code pour le pied de page -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>