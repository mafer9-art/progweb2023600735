<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f5f5dc; /* Beige */
            color: #6a5acd; /* Azul pizarra (SlateBlue) */
        }
        h1 {
            color: #dda0dd; /* Ciruela pálido (Plum) */
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            width: 300px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 2px 2px 5px #ccc;
        }
        li {
            background-color: #e6e6fa; /* Lavanda pálido (Lavender) */
            padding: 10px 15px;
            border-bottom: 1px solid #f5f5dc;
            transition: background-color 0.3s ease;
        }
        li:last-child {
            border-bottom: none;
        }
        li:hover {
            background-color: #afeeee; /* Turquesa pálido (PaleTurquoise) */
            color: #333;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Los 12 meses del año con su ordinal</h1>
<ul id="listaMeses"></ul>

<script>
    // Este script genera dinámicamente una lista de los 12 meses del año
    // junto con su ordinal correspondiente y los muestra en la página web.
    const meses = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    const ordinales = ["1er", "2do", "3er", "4to", "5to", "6to", "7mo", "8vo", "9no", "10mo", "11vo", "12vo"];

    const lista = document.getElementById("listaMeses");

    for (let i = 0; i < meses.length; i++) {
        // Itera a través de cada mes en el array 'meses'.
        let li = document.createElement("li");
        // Crea un nuevo elemento de lista (<li>).
        li.textContent = `${ordinales[i]} mes: ${meses[i]}`;
        // Establece el texto del <li> como "Número mes: Nombre del mes".
        lista.appendChild(li);
        // Agrega el <li> a la lista en el HTML.
    }
</script>
</body>
</html>
