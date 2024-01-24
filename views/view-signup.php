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
    <title>Document</title>
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
    <?php
    if ($showform) {
    ?>
        <form class="row" method="POST" action="../controllers/controller-signup.php" novalidate>
            <header>
                <!-- Votre code pour l'en-tête -->
            </header>
            <div class="container ">
                <div class="row justify-content-center align-item-center">
                    <div class="col-lg-4">
                        <div class="card shadow-lg">
                            <div class="card-body  p-4">
                                <h2 class="card-title text-center mb-4 ">Inscription</h2>

                                <form action="controller-signup.php" method="POST" novalidate>
                                    <label class="fs-5" for="nom">Nom:</label><br>
                                    <input class="col-12" type="text" id="nom" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                                    <span class="error">
                                        <?php if (isset($errors['name'])) {
                                            echo $errors['name'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="prenom">Prénom:</label><br>
                                    <input class="col-12" type="text" id="prenom" name="prenom" value="<?= isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '' ?>">
                                    <span class="error">
                                        <?php if (isset($errors['prenom'])) {
                                            echo $errors['prenom'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="pseudo">Pseudo:</label><br>
                                    <input class="col-12" type="text" id="prenom" name="pseudo" value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '' ?>">
                                    <span class="error">
                                        <?php if (isset($errors['pseudo'])) {
                                            echo $errors['pseudo'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="email">Courriel:</label><br>
                                    <input class="col-12" type="email" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                                    <span class="error">
                                        <?php if (isset($errors['email'])) {
                                            echo $errors['email'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="dob">Date de naissance:</label><br>
                                    <input class="col-12" type="date" id="dob" name="dob" value="<?= isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '' ?>">
                                    <span class="error">
                                        <?php if (isset($errors['dob'])) {
                                            echo $errors['dob'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="password">Mot de passe:</label><br>
                                    <input class="col-12" type="password" id="password" name="password">
                                    <span class="error text-danger">
                                        <?php if (isset($errors['password'])) {
                                            echo $errors['password'];
                                        } ?>
                                    </span><br>

                                    <label class="fs-5" for="confirm_password">Confirmer le mot de passe:</label><br>
                                    <input class="col-12" type="password" id="confirm_password" name="confirm_password">
                                    <span class="error ">
                                        <?php if (isset($errors['confirm_password'])) {
                                            echo $errors['confirm_password'];
                                        } ?>
                                    </span><br><br><br>

                                    <!-- isset permet de voir si la variable existe  -->

                                    <select class="fs-4 col-12 text-center" name="enterprise" id="enterprise">
                                        <option value="selected" selected>Selectionner une entreprise</option>
                                        <?php foreach ($enterprises as $enterprise) { ?>
                                            <option value="<?= $enterprise['enterprise_id'] ?>"><?= $enterprise['enterprise_name'] ?></option>
                                        <?php } ?>
                                    </select>



                                    </span><br><br><br>
                                    <div class="row">
                                        <label for="cgu" class="fs-5">J'accepte les CGU : <input type="checkbox" name="cgu" id="cgu" required></label>
                                        <div></div>



                                        <br>



                                        <div class="row justify-content-center">
                                            <input type="submit" value="S'enregistrer" class="btn btn-dark mt-3 ">
                                            <a href="../controllers/controller-signin.php">Déjà inscrit</a>
                                        </div>
                                    <?php } else { ?>

                                        <div class="row justify-content-center align-item-center">
                                            <div class="col-md-12 h-75">
                                                <div class="card shadow-lg">
                                                    <div class="card-body ">


                                                        <h2>Inscription réussie</h2>
                                                        <p><strong><em>Vous pouvez maintenant vous connecter.</em></strong></p>

                                                        <a href="../controllers/controller-signin.php" class="button">Connexion</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

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