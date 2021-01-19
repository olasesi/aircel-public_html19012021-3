<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Content-Type: application/json');
$version = [
    "status"=>true, 
    "data"=>[
        "versionnumber"=>"0.0.1"
    ]
];
echo json_encode($version);
?>