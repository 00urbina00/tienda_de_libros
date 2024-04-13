<?php
    include 'conecta_bd.php';

    $cod_prod = $_POST["cod_prod"];
    $descripcion = $_POST["descripcion"];
    $precio_uni = $_POST["precio_uni"];
    $existencia = $_POST["existencia"];
    $stock = $_POST["stock"];
    if ($descripcion!=null) {
        $query = "UPDATE Producto SET descripcion='$descripcion' WHERE idProducto='$cod_prod'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($precio_uni!=null) {
        $query = "UPDATE Producto SET preciounitario='$precio_uni' WHERE idProducto='$cod_prod'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($existencia!=null) {
        $query = "UPDATE Producto SET existencia='$existencia' WHERE idProducto='$cod_prod'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($stock!=null) {
        $query = "UPDATE Producto SET stock='$stock' WHERE idProducto='$cod_prod'";
        $ejecuta = pg_query($conexion, $query);
    }
    header("location:index.php");
?>