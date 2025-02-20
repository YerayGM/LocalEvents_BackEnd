<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
    'allowed_origins' => ['https://rafael.informaticamajada.es'],
    'allowed_headers' => ['Content-Type', 'Authorization'],
    'max_age' => 10,
    'supports_credentials' => true,
];
