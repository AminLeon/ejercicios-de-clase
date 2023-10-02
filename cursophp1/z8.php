<?php include 'includes/header.php';

$numeros_aleatorios = array();

for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(20, 30);
    $numeros_aleatorios[] = $numero_aleatorio;
}
echo "Array de números aleatorios: " . implode(", ", $numeros_aleatorios);
?>


