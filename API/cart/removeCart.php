<?php
require __DIR__ .'/../../MODEL/cart.php';
header("Content-type: application/json; charset=UTF-8");
$data = json_decode(file_get_contents("php://input"));

if(empty($data->cart)){
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
}

$cart = new Cart;

if($cart->removeCart($data->cart)){
    http_response_code(201);
    echo json_encode(["message" => "Cart removed successfully"]);
}else{
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
}