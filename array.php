<?php

$variavel = array(1,2,3,4,5);

$animal = array("b"=>"baleia", "c"=>"cadela");
//print_r força a mostrar o que esta dentro do array
//print_r($variavel);
foreach ($variavel as $v){
    echo  $v;
}

echo '<br>';


foreach ($animal as $a){
    echo $a;
}