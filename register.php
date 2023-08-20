<?php

// Configurar los encabezados CORS para permitir solicitudes desde tu sitio web en GitHub Pages
header("Access-Control-Allow-Origin: https://hemolqui.github.io/prograasistencia.github.io/");

// Resto de los encabezados CORS
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $name = $data["name"];
    $age = $data["age"];

    // Aquí puedes insertar los datos en tu base de datos o hacer cualquier otra acción necesaria

    $response = array("name" => $name, "age" => $age);
    echo json_encode($response);
} else {
    echo json_encode(array("error" => "Método no válido"));
}
?>