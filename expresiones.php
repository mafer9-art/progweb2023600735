<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuaciones con Imágenes</title>
</head>
<body>
<h2>Resultados de las ecuaciones</h2>

<?php
function calcular_a($x, $y) {
    return (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
}

function calcular_b($x) {
    return ((0.5 * $x) + ((3 + $x) / 2) * (2 * pow($x, 2))) / ((2 + 3) * $x);
}

function calcular_c($x) {
    return (sqrt((2 * $x) * (2 * $x) + pow(3, 2)) / 5) + sqrt(pow($x, 2));
}

function calcular_d($x) {
    return ((0.5 + 0.25 + 0.125) * pow($x, 1/3)) / ((sqrt($x) / 2) + ((3 * pow($x, 2)) / 4));
}

function calcular_e($x) {
    return sqrt(((pow($x, 2) / 2) + (1 / sqrt($x))) / (3 + (0.5 * pow($x, 3))));
}

// Variables dadas
$x1 = 2; $y1 = 4;
$x2 = 3;
$x3 = 2;
$x4 = 2;
$x5 = 4;
?>

<h3>Ecuación A</h3>
<img src="imagen_a.png" alt="Ecuación A">
<p>Resultado: <?php echo calcular_a($x1, $y1); ?></p>

<h3>Ecuación B</h3>
<img src="imagen_b.png" alt="Ecuación B">
<p>Resultado: <?php echo calcular_b($x2); ?></p>

<h3>Ecuación C</h3>
<img src="imagen_c.png" alt="Ecuación C">
<p>Resultado: <?php echo calcular_c($x3); ?></p>

<h3>Ecuación D</h3>
<img src="imagen_d.png" alt="Ecuación D">
<p>Resultado: <?php echo calcular_d($x4); ?></p>

<h3>Ecuación E</h3>
<img src="imagen_e.png" alt="Ecuación E">
<p>Resultado: <?php echo calcular_e($x5); ?></p>

</body>
</html>

