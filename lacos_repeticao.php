<?php

//while
echo "While: ";
$i = 0;
while ($i <10){
    echo $i;
    $i++;
}

//do while
/* A diferença dos whiles é que o do while
sempre executa uma vez, primeiro executa e depois 
verifica a condição
*/ 
echo "<br>do while";

$i = 0;

do{
    echo $i;
    $i++;
}while($i < 10);

//for
echo "<br>for: ";
for ($i = 0; $i < 10; $i++){
    echo $i;
} 

//foreach
/*
Para cada elemento o foreach renomeia e imprime 
de acordo com a condição dada no array
*/
echo "foreach: ";
$i = [0,1,2,3,4,5,6,7,8,9];
foreach($i as $j);


