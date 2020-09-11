<?php

$data = file_get_contents('php://input');
echo $data;
// $data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// echo $data["operacion"];

 ?>
