<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/responsedb.php';

$data  = require_once __DIR__ . '/../../../api_core/datadb.php';

echo Response::json(200, 'success', ['total_records' => count($data)]);