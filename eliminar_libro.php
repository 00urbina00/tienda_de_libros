<?php
    include 'consultas.php';

    $nombre = $_POST["nombre"];

    // Llamar a la función de inserción de libros
    $resultado = eliminarLibroPorNombre($nombre);

    header("location:index.php");
?>