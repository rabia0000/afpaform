<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Page confirmation</title>
</head>

<body>
    <div></div>
    <h2 class="text-center mt-4">Etes vous sur de vouloir supprimer votre trajet</h2>
    <form action="" method="POST">
        <input type="hidden" value="<?= $_POST['ride_id'] ?>" name="rideId">
        <input type="submit" value="OUI" name="delete">
        <a href="../controllers/controller-historique.php"><button type='button'>NON</button></a>
    </form>




</body>

</html>