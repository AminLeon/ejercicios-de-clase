<?php include 'includes/header.php';

function procesarSaltos($saltos) {
    $saltosArray = explode(",", $saltos);
    $resultado = array();
    $i = 0;

    while ($i < count($saltosArray)) {
        $salto = intval($saltosArray[$i]);

        if ($salto === 0) {
            break;
        }

        $resultado[] = $salto;

        for ($j = 0; $j < $salto; $j++) {
            $resultado[] = '_';
        }

        $i++;
    }

    echo implode(',', $resultado);
}

$saltos = "1,2,3";
procesarSaltos($saltos);
?>








