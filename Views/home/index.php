<?php $title = "Site portfolio";?>
<h1 class="text-light text-center">Liste des jeux</h1>
<div class="listejeux">
<ul class='listeSwitch text-light'><h3>Jeux Switch</h3>
<?php
foreach ($switch as $value){
    echo utf8_encode("<li class='list d-flex list-group'><h5 class='text-light'>".$value->titre."</h5></li>");
}?>
</ul>

<ul class='listeSwitch text-light'><h3>Jeux PlayStation</h3>
<?php
foreach ($playstation as $value){
    echo utf8_encode("<li class='list d-flex list-group'><h5 class='text-light'>".$value->titre."</h5></li>");
}?>
</ul>
</div>
<footer>
    <button id="backontop" class="top"><i class="fa-solid fa-up-long"></i> Back to top</button>
    <div class="text-light text-center" id="mention">© Xavier "butz1906" Laurence<br/>Tous droits réservés 2022</div>
</footer>