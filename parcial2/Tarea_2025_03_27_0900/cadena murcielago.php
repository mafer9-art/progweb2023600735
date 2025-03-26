<!DOCTYPE html>
<html>
<head>
    <title>Procesamiento de Cadena en PHP</title>
</head>
<body>
<h2>Procesamiento de la palabra "murciélago"</h2>
<?php
$cadena = "murcielago";
$vocales = 0;
$consonantes = 0;
$cadena_f = "";

// Recorrer la cadena para contar vocales y consonantes y convertir a idioma de la F
for ($i = 0; $i < strlen($cadena); $i++) {
    $letra = $cadena[$i];
    if (strpos("aeiou", $letra) !== false) {
        $vocales++;
        $cadena_f .= $letra . "f" . $letra;
    } else {
        $consonantes++;
        $cadena_f .= $letra;
    }
}

echo "<p><strong>Número de vocales:</strong> $vocales</p>";
echo "<p><strong>Número de consonantes:</strong> $consonantes</p>";
echo "<p><strong>Idioma de la F:</strong> $cadena_f</p>";
?>
</body>
</html>
