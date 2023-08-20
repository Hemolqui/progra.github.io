<?php

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
