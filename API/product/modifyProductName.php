<?php
// API solo paninara
/*
require __DIR__ . '/../../MODEL/product.php';
header("Content-type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

if (empty($data->id) || empty($data->name)) {
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
    die();
}

$product = new Product();

if ($product->modifyProductName($data->id, $data->name) == 1) {
    http_response_code(201);
    echo json_encode(["message" => "Updated successfully"]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Update unsuccessfull"]);
}
*/