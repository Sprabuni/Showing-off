<?php
$score = 0;
$getal = 0;

while($getal < 1){
    $dobbel = rand(1,6);
    echo("Het getrokken getal is: ".$dobbel."\n");
    IF ($dobbel%2 == 0) {
        $value = 0;
        while($value < $dobbel) {
            $kaart = rand(1,52);
            echo("De waarde van de kaart is: ".$kaart."\n");
            $score += $kaart;
            $value ++;
        }
    } ELSE {
        $getal = 1;
    }
}
echo("Er zijn in totaal ".$score." punten gescoord");
?>
