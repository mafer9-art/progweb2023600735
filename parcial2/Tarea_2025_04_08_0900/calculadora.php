<!DOCTYPE html>
<html>
<head>
    <title>Calculadora </title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #E0F7FA;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculadora {
            background-color: #F3E5F5;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
            text-align: center;
            display: flex;
            flex-direction: column; /* Organiza en columna */
            align-items: center;
        }

        h2 {
            color: #6A1B9A;
            margin-bottom: 20px;
        }

        #display {
            width: 220px;
            height: 40px;
            font-size: 20px;
            text-align: right;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            background-color: #FFFFFF;
            color: #333;
            box-shadow: inset 0px 0px 5px rgba(0,0,0,0.1);
        }

        #botones {
            display: grid;
            grid-template-columns: repeat(4, 60px);
            gap: 10px;
            justify-content: center;
        }

        .boton {
            width: 60px;
            height: 60px;
            font-size: 18px;
            border: none;
            border-radius: 10px;
            background-color: #B2EBF2;
            color: #4A148C;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton:hover {
            background-color: #CE93D8;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h2>Calculadora</h2>

    <!-- Pantalla donde se muestran los números y resultados -->
    <input type="text" id="display" readonly>

    <!-- Contenedor donde se colocan los botones -->
    <div id="botones"></div>
</div>

<script>
    // Arreglo que contiene todos los valores que tendrán los botones de la calculadora
    var botones = ['7', '8', '9', '+',
        '4', '5', '6', '-',
        '1', '2', '3', '*',
        '0', 'C', '=', '/'];

    // Se obtiene el div donde se colocarán los botones
    var contenedor = document.getElementById("botones");

    // Bucle que recorre el arreglo y crea cada botón con su valor
    for (var i = 0; i < botones.length; i++) {
        var btn = document.createElement("button"); // Crea un botón
        btn.innerHTML = botones[i];                // Le pone el texto del arreglo
        btn.className = "boton";                   // Le asigna la clase de estilo

        // Al hacer clic, se llama a la función btn_click con el valor del botón
        btn.onclick = function() {
            btn_click(this.innerHTML);
        };

        contenedor.appendChild(btn); // Agrega el botón al contenedor
    }

    // Función que recibe el valor del botón presionado
    function btn_click(val) {
        var display = document.getElementById("display"); // Accede a la pantalla

        if (val === "=") {
            // Evalúa la operación y muestra el resultado
            try {
                display.value = eval(display.value);
            } catch {
                display.value = "Error";
            }
        } else if (val === "C") {
            // Limpia el display
            display.value = "";
        } else {
            // Agrega el valor del botón al contenido del display
            display.value += val;
        }
    }
</script>

</body>
</html>

