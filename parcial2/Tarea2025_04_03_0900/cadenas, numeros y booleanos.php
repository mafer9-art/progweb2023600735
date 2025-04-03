<!DOCTYPE html>
<html>
<head>
    <title>Arreglo Compuesto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            background: SteelBlue;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        h1 {
            color: #444;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #9370DB;
            color: white;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #9400D3;
        }
        p {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Suma, Cadena y Booleanos</h1>
    <!-- Botón para mostrar la suma de los números -->
    <button onclick="mostrarResultado('suma')">Mostrar Suma de Números</button>
    <!-- Botón para mostrar la concatenación de cadenas -->
    <button onclick="mostrarResultado('cadenas')">Mostrar Concatenación de Cadenas</button>
    <!-- Botón para mostrar el resultado de la operación AND en booleanos -->
    <button onclick="mostrarResultado('booleanos')">Mostrar Resultado AND de Booleanos</button>
    <p id="resultado">Seleccione una opción</p>
</div>
<script>
    // Este script recorre un arreglo compuesto por números, cadenas y booleanos.
    // Suma los números, concatena las cadenas y realiza la operación AND en los booleanos.
    const arreglo = ["Hola", 13, true, " soy mafer", 22, false, "!", 89, true, true];
    let sumaNumeros = 0; // Almacena la suma de los números del arreglo
    let concatenacionCadenas = ""; // Almacena la concatenación de las cadenas del arreglo
    let resultadoBooleanos = true; // Almacena el resultado de la operación AND entre los valores booleanos del arreglo
    // Recorremos el arreglo y procesamos sus elementos según su tipo
    for (let elemento of arreglo) {
        if (typeof elemento === "number") {
            sumaNumeros += elemento; // Sumamos los números
        } else if (typeof elemento === "string") {
            concatenacionCadenas += elemento; // Concatenamos las cadenas
        } else if (typeof elemento === "boolean") {
            resultadoBooleanos = resultadoBooleanos && elemento; // Aplicamos la operación AND en los booleanos
        }
    }
    // Función para mostrar los resultados según el botón presionado
    function mostrarResultado(tipo) {
        const resultado = document.getElementById("resultado");
        if (tipo === "suma") {
            resultado.innerHTML = `<strong>Suma de números:</strong> ${sumaNumeros}`;
        } else if (tipo === "cadenas") {
            resultado.innerHTML = `<strong>Concatenación de cadenas:</strong> ${concatenacionCadenas}`;
        } else if (tipo === "booleanos") {
            resultado.innerHTML = `<strong>Resultado AND de booleanos:</strong> ${resultadoBooleanos}`;
        }
    }
</script>
</body>
</html>

