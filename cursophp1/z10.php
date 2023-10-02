<?php include 'includes/header.php';

$cadena = "1,2,3,2,4,1,5";

$valores = explode(",", $cadena);

$valores_sin_duplicados = array_unique($valores);

$cadena_sin_duplicados = implode(",", $valores_sin_duplicados);

echo "Cadena original: " . $cadena . "<br>";
echo "Cadena sin duplicados: " . $cadena_sin_duplicados;

?>



¡


