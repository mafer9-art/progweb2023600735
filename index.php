<?php
ini_set("display_errors", E_ALL);
include_once "persona.php";

$lista = [
    new Persona("Fulano", "1969-11-02", "5566778899"),
    new Persona("Mengao", "1980-12-02", "5512345678"),
    new Persona("Sutano", "1974-10-02", "5525361487"),
    new Persona("Machorro", "1967-02-02", "5566778899"),
    new Persona("Arthuro", "1972-01-02", "5566778899"),
    new Persona("Chirs", "1972-03-02", "5566778899"),
    new Persona("Jesus", "1930-08-02", "5566778899"),
    new Persona("Viera", "1965-05-02", "5566778899"),
    new Persona("Oswaldo", "1957-07-02", "5566778899"),
    new Persona("Sara", "1999-02-02", "5566778899")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
    <style>
        td{
            background-color:cyan;
        }
        </style> 
</head>
<body>
<h1 style="text-align: center;">Lista de personas</h1>
<table border>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de nacimiento</th>
        <th>Edad actual</th>
        <th>telefono</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($lista as $p): ?>
        <tr>
            <td><?php echo $p-> getNombre()?></td>
            <td><?php echo $p-> getFecNac()?></td>
            <td><?php echo date("Y") - date("Y", strtotime($p->getFecNac())); ?></td>
            <td><?php echo $p-> getTel()?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>