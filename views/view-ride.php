<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Trajet</title>

</head>
<style>
    body {
        font-family: 'Josefin Sans', sans-serif;
    }
</style>

<body>
    <div class='text-center mb-5'>
        <h1>Votre trajet</h1>
        <style>
            /* Définir la hauteur de la page pour centrer le contenu */
            html,
            body {
                height: 100%;
                font-family: 'Josefin Sans', sans-serif;
            }

            /* Centrer le contenu verticalement */
            body {
                background-image: url('../assets/img/forest.jpg');
                /* display: flex;
                align-items: center;
                justify-content: center; */
            }

            .card {
                background-color: #cdeabc;

            }
        </style>
        </head>

        <body>
            <form class="row" method="POST" action="" novalidate>

                <div class="container ">
                    <div class="row justify-content-center align-item-center">
                        <div class="col-lg-4">
                            <div class="card shadow-lg ">
                                <div class="card-body ">


                                    <!-- ENTRER LA DATE   -->
                                    <label class="fs-4" for="dob">Date du trajet:</label><br>
                                    <input class='fs-4' type="date" id="trajet" name="date" value="<?= isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '' ?>"><br>
                                    <span class="error">
                                        <?php if (isset($errors['date'])) {
                                            echo $errors['date'];
                                        } ?>

                                        <!-- ENTRER LE TRAJET  -->

                                        <label class="fs-4" for="dob">Entrer la distance de votre trajet:</label><br>
                                        <input class='fs-4' type="distance" id="distance" name="distance" value="<?= isset($_POST['distance']) ? htmlspecialchars($_POST['distance']) : '' ?>"><br>
                                        <span class="error">
                                            <?php if (isset($errors['distance'])) {
                                                echo $errors['distance'];
                                            } ?>
                                            <br>

                                            <!-- MODE DE TRANSPORT -->
                                            <select class="fs-4" name="transport" id="transport">
                                                <option value="selected" selected>Selectionnez un mode de transport</option>
                                                <?php foreach ($transports as $transport) { ?>
                                                    <option class="text-dark" value="<?= $transport['transport_id'] ?>"><?= $transport['transport_type'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <br>

                                            <div class=" text-center mt-3">
                                                <input type="submit" value="Enregistrer mon trajet" class="btn btn-dark  ">
                                            </div>
                                            <br>
                                            <div class='text-center mt-2'>
                                                <a href="../controllers/controller-home.php">
                                                    <button type="button" class="btn btn-success">Retour à la page home</button>
                                                </a>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        </body>

</html>