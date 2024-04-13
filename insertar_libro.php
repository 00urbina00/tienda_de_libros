<?php
    // Incluir el archivo de conexión a la base de datos
    include 'consultas.php';

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $fecha_publicacion = $_POST["fecha_publicacion"];
    $categoria = $_POST["categoria"];
    $precio = $_POST["precio"];
    $existencia = $_POST["existencia"];

    // Llamar a la función de inserción de libros
    $resultado = insertarLibro($nombre, $autor, $fecha_publicacion, $categoria, $precio, $existencia);

    // Redireccionar de vuelta al index
    header("location:index.php");

?>