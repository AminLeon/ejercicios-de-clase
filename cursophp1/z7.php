<?php include 'includes/header.php';

$nPar = array();

for ($x = 2; $x <= 100; $x += 2) {
    $nPar[] = $x;
}


$numeros_pares_str = implode(", ", $nPar);

echo "Números pares: " . $numeros_pares_str . "<br>";
?>
