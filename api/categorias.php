<?php
require_once 'funciones/categorias.php';
header('Content-Type: application/json; charset=UTF-8');

$db = mysqli_connect('localhost', 'root', '', 'cwm_2020_2_n');
mysqli_set_charset($db, 'utf8mb4');

// Verificamos cuál es el método de la petición, y en base a eso actuamos.
// Para obtener el método de la petición, podemos ayudarnos con la súperglobal $_SERVER['REQUEST_METHOD'] .
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['id'])) {
            // Buscamos una categoria por su id.
        } else {
            $categorias = categoriasTodas($db);
            echo json_encode([
                'data' => $categorias
            ]);
//            require_once 'acciones/categorias-todos.php';
        }
        break;

    case 'POST':
        require_once 'acciones/categorias-crear.php';
        break;

    case 'PUT':
        break;

    case 'PATCH':
        break;

    case 'DELETE':
        break;

    default:
        die('No existe la acción que estás buscando >:(');
}
