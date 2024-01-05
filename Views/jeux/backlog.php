<?php $title = "Backlog";?>
<h2 class="textbacklog text-decoration-none text-center text-light">BACKLOG</h2>
<ul class='text-light text-center p-0 mt-5'>
<?php
foreach ($backlog as $value){
    echo utf8_encode("<li class='list d-flex list-group'><h5 class='text-light'>".$value->titre." - ".$value->categorie."</h5></li><div class='video'>". $value->video."</div>");
}?>
</ul>
<footer>
    <button id="backontop" class="top"><i class="fa-solid fa-up-long"></i> Back to top</button>
    <div class="text-light text-center" id="mention">© Xavier "butz1906" Laurence<br/>Tous droits réservés 2022</div>
</footer>