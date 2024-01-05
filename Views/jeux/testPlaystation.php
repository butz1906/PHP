<?php 
$dossier=strtr($testPlaystation->titre,"'","-");

    $title = utf8_encode($testPlaystation->titre);
    echo "<h2 class='titrePlaystation text-center text-light'>".utf8_encode($testPlaystation->titre)."</h2>";
    echo "<div class='playstation d-flex text-light justify-content-around'>".utf8_encode($testPlaystation->categorie)."</div>";
    echo "<div class='playstation d-flex text-light justify-content-around'><img class='covertest' src='images/".$dossier."/cover.jpg'></div>";
    echo "<div class='playstationtext text-light'><strong>".utf8_encode($testPlaystation->intro)."</strong>";
    echo "<h4>".utf8_encode($testPlaystation->titre1)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte1)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/001.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/001.jpg'></a>";
    echo "<a href='images/".$dossier."/002.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/002.jpg'></a></div>";
    echo "<h4>".utf8_encode($testPlaystation->titre2)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte2)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/003.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/003.jpg'></a>";
    echo "<a href='images/".$dossier."/004.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/004.jpg'></a></div>";
    echo "<h4>".utf8_encode($testPlaystation->titre3)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte3)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/005.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/005.jpg'></a>";
    echo "<a href='images/".$dossier."/006.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/006.jpg'></a></div>";
    echo "<h4>".utf8_encode($testPlaystation->titre4)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte4)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/007.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/007.jpg'></a>";
    echo "<a href='images/".$dossier."/008.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/008.jpg'></a></div>";
    echo "<h4>".utf8_encode($testPlaystation->titre5)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte5)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/009.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/009.jpg'></a>";
    echo "<a href='images/".$dossier."/010.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/010.jpg'></a></div>";
    echo "<h4>".utf8_encode($testPlaystation->titre6)."</h4>";
    echo "<p>".utf8_encode($testPlaystation->texte6)."</p>";
    echo "<div class='picture'><a href='images/".$dossier."/011.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/011.jpg'></a>";
    echo "<a href='images/".$dossier."/012.jpg' data-lightbox=".utf8_encode($testPlaystation->titre)."><img class='imagetest' src='images/".$dossier."/012.jpg'></a><br/></div>";
    echo "<strong>".utf8_encode($testPlaystation->conclusion)."</strong>";
    echo "<div class='video'>".$testPlaystation->video."</div>";
    echo "<div class='d-flex bouton'><button class='btn amazon'><a href='".$testPlaystation->achat."' target='_blank'><i class='fa-solid fa-cart-shopping'></i> Acheter sur Amazon.fr</a></button></div>";
    echo "<div class='d-flex bouton'><button class='btn'><a href='".$testPlaystation->demat."' target='_blank'><img class='store' src='images/store.png'></a></button></div></div>";

?>
<footer class="piedplaystation">
    <button id="backontop" class="top"><i class="fa-solid fa-up-long"></i> Back to top</button>
    <div class="text-light text-center" id="mention">© Xavier "butz1906" Laurence<br/>Tous droits réservés 2022</div>
</footer>