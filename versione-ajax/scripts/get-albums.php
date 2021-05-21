<?php
require_once __DIR__ . '/../../database.php';

//1 content type json
header('Content-Type: application/json');

//2 convertire dato json
echo json_encode($database);
