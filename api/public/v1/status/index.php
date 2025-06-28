<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data  = require_once __DIR__ . '/../../../api_core/response.php';

echo Response::json(200, 'success', [
    'version' => API_VERSION,
    'status' => 'API is active',
    'timestamp' => date('Y-m-d H:i:s'),
    'data' => $data
]);

// if (API_IS_ACTIVE) {
//     echo Response::json(200, 'sucess', [
//         'version' => API_VERSION,
//         'status' => 'API is active',
//         'timestamp' => date('Y-m-d H:i:s')
//     ]); 
// } else {
//     echo Response::json(200, 'success', [
//         'version' => API_VERSION,
//         'status' => 'API in maintanance',
//         'timestamp' => date('Y-m-d H:i:s')
//     ]); 
// }