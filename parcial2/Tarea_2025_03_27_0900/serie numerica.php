<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie Numérica en PHP</title>
</head>
<body>
<h2>Serie Numérica del 2 al 900</h2>
<?php
// Función para generar la serie numérica
function generarSerie($inicio, $fin, $paso) {
    return range($inicio, $fin, $paso); // Genera un array con los números desde $inicio hasta $fin en intervalos de $paso
}

// Función para calcular el promedio
function calcularPromedio($serie) {
    return array_sum($serie) / count($serie); // Suma todos los valores del array y los divide entre la cantidad de elementos
}

// Función para calcular la mediana
function calcularMediana($serie) {
    $total = count($serie); // Obtiene la cantidad total de elementos en el array
    $mitad = $total / 2;
    return ($total % 2 == 0) ? ($serie[$mitad - 1] + $serie[$mitad]) / 2 : $serie[floor($mitad)];
    // Si la cantidad es par, devuelve el promedio de los dos valores centrales; si es impar, devuelve el valor central
}

// Función para calcular la moda
function calcularModa($serie) {
    $valores = array_count_values($serie); // Crea un array donde las claves son los números y los valores la cantidad de veces que aparecen
    $maximo = max($valores); // Obtiene el mayor valor de ocurrencias en el array
    $moda = array_keys($valores, $maximo); // Obtiene las claves (números) que tienen la máxima cantidad de ocurrencias
    return implode(", ", $moda); // Convierte el array en una cadena separada por comas
}

// Generar la serie
$serie = generarSerie(2, 900, 2);

// Imprimir la serie
echo "<p>" . implode(", ", $serie) . "</p>";

// Mostrar el promedio
echo "<p><strong>Promedio:</strong> " . calcularPromedio($serie) . "</p>";

// Mostrar la moda
echo "<p><strong>Moda:</strong> " . calcularModa($serie) . "</p>";

// Mostrar la mediana
echo "<p><strong>Mediana:</strong> " . calcularMediana($serie) . "</p>";
?>
</body>
</html>

