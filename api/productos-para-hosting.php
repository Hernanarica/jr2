<?php
session_start();
require_once 'funciones/productos.php';
//require_once 'classes/Producto.php';

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

const DB_HOST = "localhost"; //"127.0.0.1"
const DB_USER = "s6000623_db_jr2";
const DB_PASS = "NUpu56wafa";
const DB_BASE = "s6000623_db_jr2";

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
mysqli_set_charset($db, 'utf8mb4');

// Verificamos cuál es el método de la petición, y en base a eso actuamos.
// Para obtener el método de la petición, podemos ayudarnos con la súperglobal $_SERVER['REQUEST_METHOD'] .
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['id'])) {
            // Buscamos un producto por su id.
        } else {
//            require_once 'acciones/productos-todos.php';
            $productos = productosTodos($db);
//            $productos = Producto::todos();
            echo json_encode([
                'data' => $productos
            ]);
        }
        break;

    case 'POST':
        // Verificamos si el usuario está autenticado.
        if(!isset($_SESSION['id'])) {
            echo json_encode([
                'success' => false,
                'error' => 'Se requiere haber iniciado sesión para realizar esta acción.'
            ]);
            exit;
        }

//        require_once 'acciones/productos-crear.php';
        $contenidoPost = file_get_contents('php://input');
        $postData = json_decode($contenidoPost, true);
        $exito = productosCrear($db, $postData);
//        $prod = new Producto;
//        $exito = $prod->crear($postData);
        if($exito) {
            echo json_encode([
                'success' => true
            ]);
        } else {
            echo json_encode([
                'success' => false
            ]);
        }
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