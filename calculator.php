<?php
$Operator=readline("welke operator wil je gebruiken? (+, -, %)");
if($Operator != "+" && $Operator!= "%" && $Operator!= "-" ){
    echo($Operator." is geen geldige operator");
    exit();
}
$getal1=readline("wat is het eerste getal?");
if(is_numeric($getal1)== false){
    echo($getal1." is geen getal");
    exit();
}
$getal2=readline("wat is het tweede getal?");
if(is_numeric($getal2)== false){
    echo($getal2." is geen getal");
    exit();
}


if($Operator == "+"){
    echo("het antwoord is ".($getal1+$getal2));
}else if($Operator == "-"){
    echo("het antwoord is ".($getal1-$getal2));
}else if($Operator == "%") {
    echo("het antwoord is ".($getal1%$getal2));
}else {
    echo("geen antwoord mogelijk");
}

