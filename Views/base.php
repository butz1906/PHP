<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@80,549&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9876c79344.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
    <link href="../Lightbox/lightbox.css" rel="stylesheet" />
    <script src="../Lightbox/lightbox.js"></script>
    <!--Affichage dynamique de la variable $title-->
    <title><?= $title ?></title>
</head>

<body id="top">
    <div class="container bg-dark">
        <header class="text-center text-light bg-dark">
            <h1><a class='text-light' href="index.php">Accueil</a></h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?controller=jeux&action=switch"><img src="images/switch.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?controller=jeux&action=playstation"><img src="images/playstation.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?controller=jeux&action=backlog">
                            <h1 class="titrebacklog">Backlog</h1>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?controller=jeux&action=annee&annee=1985">
                            <h1 class="titrebacklog">Panthéon</h1>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <!-- Affichage dynamique de la variable $content -->
            <?= $content ?>
        </main>
    </div>
</body>

</html>