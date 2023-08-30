<?php
require("../../database/connection.php");

$id = $_POST['id'];

$sql = "DELETE FROM products WHERE id=$id";

if($conn->query($sql)){
    $response = array(
        'status' => true,
        'code' => 204,
        'message' => 'Producto eliminado exitosamente',
        'data' => null
    );
}else{
    $response = array(
        'status' => false,
        'code' => 500,
        'message' => 'Error al eliminar el producto: ' . $conn->error,
        'data' => null
    );
}

echo json_encode($response);
?>
