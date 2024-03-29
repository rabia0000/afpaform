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
    <title>HOME</title>
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
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('../assets/img/lake.jpg');
        }

        .card {
            /* background-color: #cdeabc; */
            background-color: rgba(212, 228, 188, 0.13);
        }
    </style>
</head>


<body>
    <div class="container ">
        <div class="row justify-content-center align-item-center">
            <div class="col-lg-4">
                <div class="card shadow-lg ">


                    <div class="card shadow justifiant-content-center p-5">
                        <div class="text-center my-3 ">
                            <h1 class='fs-1'>Bienvenue <?php echo $_SESSION['user']['user_pseudo'] ?></h1>
                        </div>
                        <div class="text-center fs-2">
                            <?php $date = date('d/m/Y') ?>
                            <p><?php echo "Aujourd'hui nous sommes le " . $date ?></p>
                        </div>
                        <div class="text-center fs-4">
                            <p>Que voulez vous faire ?</p>
                        </div>

                        <div class=" text-center">
                            <a href="../controllers/controller-ride.php" class="btn btn-success col-11">Ajouter un trajet</button></a>
                        </div>

                        <div class='mt-3 text-center'>
                            <a href="../controllers/controller-historique.php" class="btn btn-success col-11">Consulter mes trajets
                            </a>
                        </div>
                        <div class='mt-3 text-center'>
                            <a href="../controllers/controller-profil.php" class="btn btn-success col-11">Afficher mon Profil</a>
                        </div>
                        <div class='mt-3 text-center'>
                            <a href="../controllers/controller-deconnexion.php">
                                <button type="button" class="btn btn-outline-danger col-11">Se déconnecter</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>