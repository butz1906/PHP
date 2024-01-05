<?php $title = $_GET['annee']; ?>
<p class="text-center text-light">De 1985 à aujourd'hui, retrouvez pour chaque année une sélection de jeux ayant marqué l'histoire du jeux vidéo</p>
<ul class="nav flex-column" id="annees">
    <?php
    foreach ($pantheon as $value) {
    ?>
        <li class="nav-item">
            <a class="nav-link text-light" href='index.php?controller=jeux&action=annee&annee=<?php echo $value->annee ?>'><?php echo $value->annee ?></a>
        </li>
    <?php    }
    ?>
</ul>
<h2 class="text-center text-light"><?= $title ?></h2>
<div class="d-flex justify-content-around">
    <?php
    foreach ($annee as $jeu) {
        $titrejeu = strtr($jeu->titre, "'", "-");
        echo ("<div class='jeuxpantheon'><h5 class='text-light'>" . utf8_encode($jeu->titre) . "</h5>
        <div class='text-light'>" . utf8_encode($jeu->texte) . "</div>
        <div class='picturepantheon'>
        <img class='imagetest' src='images/pantheon/" . utf8_encode($titrejeu) . " 1.jpg'>
        <img class='imagetest' src='images/pantheon/" . utf8_encode($titrejeu) . " 2.jpg''>
        <img class='imagetest' src='images/pantheon/" . utf8_encode($titrejeu) . " 3.jpg''>
        </div></div>");
    }
    ?>
</div>
<footer>
    <button id="backontop" class="top"><i class="fa-solid fa-up-long"></i> Back to top</button>
    <div class="text-light text-center" id="mention">© Xavier "butz1906" Laurence<br />Tous droits réservés 2022</div>
</footer>