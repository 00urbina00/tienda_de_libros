<?php 
global $conexion;

try {
    // Intentamos realizar la conexión
    $conexion = pg_connect("host=localhost dbname=libreria user=postgres password=password");

    // Verificamos si la conexión fue exitosa
    if (!$conexion) {
        // Si la conexión falla, mostramos un mensaje de error en la web
        throw new Exception("Error al conectar a la base de datos: " . pg_last_error());
    }

    // La conexión se realizó correctamente, puedes seguir con tu lógica de la aplicación
    echo "Conexión exitosa a la base de datos.";

} catch (Exception $e) {
    // Capturamos la excepción y mostramos un mensaje de error en la página web
    echo "Error: " . $e->getMessage();
}
?>