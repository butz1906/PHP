<?php $title = "Switch"?>
<h2 class="titreSwitch text-center text-light">Jeux Switch</h2>
<div class="switch d-flex justify-content-around">
<?php
foreach ($switch as $value){
    $dossier=strtr($value->titre,"'","-");
    echo utf8_encode("<div class='titre d-flex list-group'><div class='d-flex justify-content-center'><a href='index.php?controller=jeux&action=testSwitch&id=$value->id'><h5 class='text-light'>".$value->titre."</div><img class='cover' src='images/".$dossier."/cover.jpg'></a></div>");
}
?>
</div>
<footer class="piedswitch">
            <button id="backontop" class="top"><i class="fa-solid fa-up-long"></i> Back to top</button>
            <div class="text-light text-center" id="mention">© Xavier "butz1906" Laurence<br/>Tous droits réservés 2022</div>
        </footer>