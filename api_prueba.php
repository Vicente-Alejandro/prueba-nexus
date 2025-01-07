<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = [
        "status" => "success",
        "data" => ["message" => "Hola Mundo!"]
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}


?>