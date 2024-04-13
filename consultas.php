<?php

// Incluimos el archivo de conexión
include_once 'conexion.php';

// Función para insertar un libro
function insertarLibro($nombre, $autor, $fecha_publicacion, $categoria, $precio, $existencia) {
    global $conexion;
    $query = "INSERT INTO libros (nombre, autor, fecha_publicacion, categoria, precio, existencia) VALUES ('$nombre', '$autor', '$fecha_publicacion', '$categoria', $precio, $existencia)";
    return pg_query($conexion, $query);
}

// Función para obtener todos los libros
function obtenerLibros() {
    global $conexion;
    $query = "SELECT * FROM libros";
    return pg_query($conexion, $query);
}

// Función para buscar un libro por su nombre
function buscarLibroPorNombre($nombre) {
    global $conexion;
    $query = "SELECT * FROM libros WHERE nombre = '$nombre' ";
    return pg_query($conexion, $query);
}

// Función para eliminar un libro por su nombre
function eliminarLibroPorNombre($nombre) {
    global $conexion;
    $query = "DELETE FROM libros WHERE nombre = '$nombre'";
    return pg_query($conexion, $query);
}

// Función para modificar un libro
function modificarLibro($id, $nombre, $autor, $fecha_publicacion, $categoria, $precio, $existencia) {
    global $conexion;
    $query = "UPDATE libros SET nombre='$nombre', autor='$autor', fecha_publicacion='$fecha_publicacion', categoria='$categoria', precio=$precio, existencia=$existencia WHERE nombre = '$nombre'";
    return pg_query($conexion, $query);
}

// Agrega aquí más funciones para otras consultas que necesites

?>