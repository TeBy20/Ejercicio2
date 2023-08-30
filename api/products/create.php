<?php
    require("../../database/connection.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO products (name, price, stock) VALUES ('$name', $price, $stock);";

    if($conn->query($sql)) {
        $response = array(
            'status' => true,
            'code' => 201,
            'message' => "",
            'data' => null
        );
    }else{
        $response = array(
            'status' => false,
            'code' => 500,
            'message' => 'Error al crear el procuto: ' . $conn->error,
            'data' => null
        );
    }

    echo json_encode($response);
?>