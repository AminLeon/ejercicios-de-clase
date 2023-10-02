<?php include 'includes/header.php';

function leaders($arr) {
    $n = count($arr);
    $leaders = array();
    $sum = 0;

    for ($i = $n - 1; $i >= 0; $i--) {
        if ($arr[$i] > $sum) {
            $leaders[] = $arr[$i];
        }
        $sum += $arr[$i];
    }

    
    $leaders = array_reverse($leaders);

    return $leaders;
}

// Ejemplos
$arr1 = [1, 2, 3, 4, 0];


echo "Resultado 1: " . implode(", ", leaders($arr1)) . "\n";



?>








