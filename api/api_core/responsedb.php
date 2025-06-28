<?php

class Response
{
    public static function json($status = 200, $message = 'success', $data = null)
    {
        // Set the content type to JSON
        header('Content-Type: application/json; charset=utf-8');

        if (API_IS_ACTIVE) {
            $status = 200; 

            return json_encode([
                'status' => $status,
                'message' => $message,
                'api_version' => API_VERSION,
                'time_reponse' => time(),
                'date_time_response' => date('Y-m-d H:i:s'),
                'data' => $data
            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);     
        }
        else {
            $status = 400; 
            $message = 'Apis is not running';

            return json_encode([
                'status' => $status,
                'message' => $message,
                'api_version' => API_VERSION,
                'time_reponse' => time(),
                'date_time_response' => date('Y-m-d H:i:s'),
                'data' => null
            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);       
        }

    }   
}   