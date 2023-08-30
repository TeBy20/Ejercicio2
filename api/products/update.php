<?php
require("../../database/connection.php");

$id = $_GET["id"];

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id";

if($conn->query($sql)) {
    $response = array(
        "status" => true,
        "code" => 204,
        "message" => "",
        "data" => null
    );
}else{
    $response = array(
        "status" => false,
        "code" => 500,
        "message" => "Error al actualizar el producto: " . $conn->error,
        "data" => null
    );
}

echo json_encode($response);
?>
