<?php

    $HOST = 'localhost';
    $DB = 'isdm_api';
    $USER = 'root';
    $PASSWORD = '12345678';

    $conn = new mysqli($HOST, $USER, $PASSWORD, $DB);

    if($conn->connect_error) {
        die('Error de conexion: ' . $conn->connect_error);
    }
    

?>