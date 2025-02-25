<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
    'allowed_origins' => ['https://rafael.informaticamajada.es', 'http://localhost:5173', 'http://localhost:5174'],
    'allowed_headers' => ['Content-Type', 'Authorization'],
    'max_age' => 10,
    'supports_credentials' => true,
];