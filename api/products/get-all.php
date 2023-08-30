<?php

    require("../../database/connection.php");


    $sql = "SELECT * FROM products;";
    $result = $conn->query($sql);

    $products = array();

    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    $response = array(
        "status" => true,
        "code" => 200,
        "message" => "",
        "data" => $products
    );

    echo json_encode($response);

?>