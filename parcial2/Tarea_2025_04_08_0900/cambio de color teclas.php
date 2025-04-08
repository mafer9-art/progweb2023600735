<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>Interfaz con Teclado</title>
    <style>
        body {
            text-align: center;
            font-family: sans-serif;
            margin-top: 50px;
        }
        .tecla {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            margin: 10px;
            background-color: #ccc;
            border-radius: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>

<h2>Presiona una tecla: W, A, S, D, Z o X</h2>

<div>
    <div class="tecla">W</div>
</div>
<div>
    <div class="tecla">A</div>
    <div class="tecla">S</div>
    <div class="tecla">D</div>
</div>
<div>
    <div class="tecla">Z</div>
    <div class="tecla">X</div>
</div>

<script>
    // Escuchar eventos del teclado
    document.addEventListener('keydown', function(event) {
        cambiarColor(event.key.toLowerCase());
    });

    // Función que cambia el color de fondo
    function cambiarColor(tecla) {
        switch(tecla) {
            case 'w':
                document.body.style.backgroundColor = 'lightblue';
                break;
            case 'a':
                document.body.style.backgroundColor = 'lightgreen';
                break;
            case 's':
                document.body.style.backgroundColor = 'lightcoral';
                break;
            case 'd':
                document.body.style.backgroundColor = 'orange';
                break;
            case 'z':
                document.body.style.backgroundColor = 'yellow';
                break;
            case 'x':
                document.body.style.backgroundColor = 'violet';
                break;
            default:
                // No hacer nada si se presiona otra tecla
                break;
        }
    }
</script>

</body>
</html>
