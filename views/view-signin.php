<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Définir la hauteur de la page pour centrer le contenu */
        html,
        body {
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
    <form class="row" method="POST" action="../controllers/controller-signin.php" novalidate>

        <div class="container ">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-12 h-75">
                    <div class="card shadow-lg">
                        <div class="card-body ">
                            <h2 class="card-title text-center mb-4">Page de connexion</h2>
                            <!-- EMAIL  -->
                            <div class="text-center fs-3">
                                <label for="email">Votre Email:</label><br>

                                <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
                                <span class="error">
                                    <?php if (isset($errors['email'])) {
                                        echo $errors['email'];
                                    } ?>
                            </div>
                            </span><br>

                            <!-- MOTS DE PASSE -->

                            <div class="text-center fs-3">
                                <label for="password">Mot de passe:</label><br>
                                <input type="password" id="password" name="password">
                                <span class="error text-danger">
                                    <?php if (isset($errors['password'])) {
                                        echo $errors['password'];
                                    } ?>
                                </span><br>
                                <br>
                            </div>


                            <div class="row ">
                                <input type="submit" value="Me connecter" class="btn btn-dark mt-3 ">
                            </div>

                            <div></div>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>