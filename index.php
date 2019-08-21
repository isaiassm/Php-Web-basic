<?php

//define a pagina atual pela URl
$pagina = 'home';

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}

//carrega o header.php
include 'header.php';

//carrega a pagina escolhida pelo usuario
switch($pagina){
    case 'equipe': 
    include 'equipe.php';
    break;

    default: 
    include './home.php';
    break;
}   

include 'footer.php';