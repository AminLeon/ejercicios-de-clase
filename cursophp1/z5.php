<?php include 'includes/header.php';

$numero = rand(1, 6);

if ($numero == 1) {
    echo "<img src='./img/dado.jpeg>";
} elseif ($numero == 2) {
    echo "<img src='./img/dado2.png' >";
} elseif ($numero == 3) {
    echo "<img src='./img/dado3.jpeg' >";
} elseif ($numero == 4) {
    echo "<img src='./img/dado4.png' >";
} elseif ($numero == 5) {
    echo "<img src='./img/dado5.jpeg' >";
} elseif ($numero == 6) {
    echo "<img src='./img/dado6.jpeg' ";
}

?>
