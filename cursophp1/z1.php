<?php include 'includes/header.php';


$int = 33;
$float = 3.33;
$booleano = true;
$String = "Mi gata se llama Chloe";
$cadenaDobles = "Cadena de comillas dobles";
$cadenaSimples = 'Cadena de comillas simple';
var_dump("Esto es un entero". " ".$int . "<br>");
var_dump("Esto es un float". " ".$float . "<br>");



$concat1 = "Amin";
$concat2 = " Housnane Leon";
$concatT = "Mi nombre es " . $concat1 . $concat2;



echo $concatT . "<br>";
print $String. "<br>";


$constante = true;

echo "La tierra es redonda?"." ".$constante . "<br>";

$conversionexpli = (String)$int;
var_dump("Esto es una conversion explicita"." ".$conversionexpli);
?>
