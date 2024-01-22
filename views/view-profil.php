<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <title>Accueil</title>
    <title>Document</title>
</head>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Josefin Sans', sans-serif;
        background-image: url('../assets/img/forest.jpg');
    }

    .card {
        background-color: #cdeabc;
    }
</style>
</style>

<body>
    <div>

    </div>

    <div class="card shadow justifiant-content-center p-5">
        <div class="text-center my-3 ">
            <h1>Votre Profil</h1>
        </div>



        <div class='text-center'>
            <h2 class='mb-3 fs-3 text-secondary'>Votre pseudo : <div class='fs-2 text-dark'><?php echo $pseudo ?></div>
            </h2>

            <h2 class='mb-3 fs-3 text-secondary'>Votre nom : <div class='fs-2 text-dark'><?php echo $nom ?></div>
            </h2>
            <h2 class='mb-3 fs-3 text-secondary'>Votre prenom : <div class='fs-2 text-dark'><?php echo $prenom ?></div>
            </h2>
            <h2 class='mb-3 fs-3 text-secondary'>Votre date de naissance : <div class='fs-2 text-dark'><?php echo $ddn ?></div>
            </h2>
            <h2 class='mb-3 fs-3 text-secondary'>Votre email : <div class='fs-2 text-dark'> <?php echo $email ?></div>
            </h2>
            <a href="../controllers/controller-home.php"><button type="button" class="btn btn-success">Retour à la page Home</button></a>
        </div>
    </div>
</body>

</html>