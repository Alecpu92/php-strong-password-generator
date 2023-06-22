<?php
     $lettersMin = range('a' , 'z');
     $lettersCap = range('A' , 'Z');
     $numbers = range(0,9);
     $special = [
        ...range("!" , "/"),
        ...range(":" , "@"),
        ...range("[" , "'"),
        ...range("{" , "-")
        ];

        $final = [...$lettersMin, ...$lettersCap, ...$numbers, ...$special]



$lng = $_GET['lenght'];

$res = "";
for ($x=0;$x<$lng;$x++) {

    $rndInd = rand(0, count($final) - 1);
    $rndChr = $final[$rndInd];
    $res .= $rndChr;
}

?>