<?php
/**
 * Retorna un array con todos los productos.
 *
 * @param MySQLi $db
 * @return array
 */
function productosTodos($db) {
    $query = "SELECT * FROM productos WHERE productos.temporada = 'invierno 2021' AND productos.disponible = '1'";

    $res = mysqli_query($db, $query);

    $salida = [];

    while($fila = mysqli_fetch_assoc($res)) {
        $salida[] = $fila;
    }

    return $salida;
}
/*
 * Retorna los datos del producto con el $id provisto.
 * @param mysqli $db
 * @param int $id
 * @return array
*/
function productosTraerPorPk($db, $id){
    $id = (int) $id;
    $query = "SELECT * FROM productos
               WHERE id_producto = ". $id;

    $res = mysqli_query($db, $query);
    return mysqli_fetch_assoc($res);
}
/**
 * Crea un nuevo producto con la $data proporcionada.
 *
 * @param MySQLi $db
 * @param array $data
 * @return bool
 */
function productosCrear($db, $data) {
    $id_usuario = 1;
    $disponible = 1;
    $nombre         = mysqli_real_escape_string($db, $data['nombre']);
    $precio_efectivo = mysqli_real_escape_string($db, $data['precio_efectivo']);
    $precio_envio   = mysqli_real_escape_string($db, $data['precio_envio']);
    $stock       = mysqli_real_escape_string($db, $data['stock']);
    $temporada       = mysqli_real_escape_string($db, $data['temporada']);
    $categoria  = mysqli_real_escape_string($db, $data['categoria']);
    $descripcion    = mysqli_real_escape_string($db, $data['descripcion']);

    $query = "INSERT INTO productos (id_usuario, nombre, precio_efectivo, precio_envio, stock, categoria, descripcion, stock, disponible, temporada)
          VALUES ('" . $id_usuario . "' , '" . $nombre . "', '" . $precio_efectivo . "', '" . $precio_envio . "', '" . $stock . "', '" . $categoria . "', '" . $descripcion . "', '" . $stock . "', '" . $disponible . "', '" . $temporada . "', '')";

    return mysqli_query($db, $query);
}
