<?php
// $_POST se poblaba con los datos que llegan por POST con formato de formulario.
// Como acá no hay un formato de form, sino un JSON, $_POST va a estar y no nos sirve.
//echo "<pre>";
//print_r($_POST); // Imprime Array ()
//echo "</pre>";

// ¿Cómo hacemo' entonce'?
// Vamos a tener que laburarlo un toque más:
// Tenemos que leer el string que recibimos por POST (a través del "buffer de entrada de php"), parsearlo
// con el json_decode, y recién ahí usarlo.
// Leemos el "buffer de entrada" con la función file_get_contents.
// 'php://input' es el buffer de entrada del body de la petición en php.
$contenidoPost = file_get_contents('php://input');
//echo $contenidoPost;
$postData = json_decode($contenidoPost, true);

// Escapamos los datos.
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

$exito = mysqli_query($db, $query);

if($exito) {
    echo json_encode([
        'success' => true,
        'msg' => "Producto insertado con éxito."
    ]);
} else {
    echo json_encode([
        'success' => false,
        'msg' => "Error al insertar el producto en la base de datos."
    ]);
}
