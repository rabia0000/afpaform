<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Accueil</title>
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Josefin Sans', sans-serif;
    }
</style>

<body>
    <div class='text-center mb-5'>
        <h1>Votre Profil</h1>

    </div>


    <div class='text-center'>
        <h2 class='mb-3 fs-3'>Votre pseudo : <?php echo $pseudo ?></h1>

            <h2 class='mb-3 fs-3'>Votre nom : <?php echo $nom ?></h1>
                <h2 class='mb-3 fs-3'>Votre prenom : <?php echo $prenom ?></h1>
                    <h2 class='mb-3 fs-3'>Votre date de naissance : <?php echo $ddn ?></h1>
                        <h2 class='mb-3 fs-3'>Votre email : <?php echo $email ?></h1>
                            <a href="../controllers/controller-home.php">Retour home</a>

    </div>
</body>

</html>