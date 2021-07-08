<?php
/**
 * Retorna todas las categorías de la base de datos.
 *
 * @param mysqli $db
 * @return array
 */
function categoriasTodas($db) {
    $query = "SELECT * FROM categorias";
    $res = mysqli_query($db, $query);

    $salida = [];

    while($fila = mysqli_fetch_assoc($res)) {
        $salida[] = $fila;
    }

    return $salida;
}
