<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Définir la hauteur de la page pour centrer le contenu */
        html, body {
            height: 100%;
        }

        /* Centrer le contenu verticalement */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Votre code pour l'en-tête -->
    </header>
<div class="container ">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-6 ">
            <div class="card shadow-lg">
                <div class="card-body ">
                    <h2 class="card-title text-center mb-4">Inscription</h2>

                    <form action="controller-signup.php" method="POST">
                    <label for="nom">Nom:</label><br>
                    <input type="text" id="nom" name="nom" value = "<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">
                    <span class="error">
                    <?php if (isset($errors['nom'])) {
                    echo $errors['nom'];
                    } ?>
        </span><br><br>

        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" value = "<?= isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '' ?>">
        <span class="error">
            <?php if (isset($errors['prenom'])) {
                echo $errors['prenom'];
            } ?>
        </span><br><br>

        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" value = "<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
        <span class="error">
            <?php if (isset($errors['email'])) {
                echo $errors['email'];
            } ?>
        </span><br><br>

        <label for="dob">Date de naissance:</label><br>
        <input type="date" id="dob" name="dob" value = "<?= isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '' ?>">
        <span class="error">
            <?php if (isset($errors['dob'])) {
                echo $errors['dob'];
            } ?>
        </span><br><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password">
        <span class="error">
            <?php if (isset($errors['password'])) {
                echo $errors['password'];
            } ?>
        </span><br><br>

        <label for="confirm_password">Confirmer le mot de passe:</label><br>
        <input type="password" id="confirm_password" name="confirm_password">
        <span class="error">
            <?php if (isset($errors['confirm_password'])) {
                echo $errors['confirm_password'];
            } ?>
        </span><br><br>
        <div class = "row">
        <label for="cgu" class="text-center text-bold">J'accepte les CGU : <input type="checkbox" name="cgu" id="cgu" required></label>
        <div></div>
        

        
    <br>
       
    
        
        <div class="row ">
        <input type="submit" value="S'enregistrer" class="btn btn-dark mt-3 ">
        </div>
       
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