<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Accueil</title>
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
    <form class="row" method="POST" action="../controllers/controller-home.php" novalidate>
        <div class="justifiant-content-center">
            <div class="text-center my-3">
                <h1>Bienvenue Bryan</h1>
            </div>
            <div class="text-center">
                <?php $date = date('d/m/Y') ?>
                <p><?php echo "Aujourd'hui nous sommes le " . $date ?></p>
            </div>
            <div class="text-center">
                <p>Que voulez vous faire ?</p>
            </div>

            <div class=" text-center">
                <button type="button" class="btn btn-success">Ajouter un trajet</button>
            </div>
            <div class='mt-3 text-center'>
                <button type="button" class="btn btn-success">Consulter mes historiques de trajet</button>
            </div>
            <div class='mt-3 text-center'>
                <button type="button" class="btn btn-success">Se déconnecter</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>