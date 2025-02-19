<?php

return [
    // Define las rutas a las que se aplicará la política de CORS.
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    // Especifica los métodos HTTP permitidos para las solicitudes CORS.
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    // Define los orígenes permitidos desde los cuales se pueden hacer solicitudes.
    'allowed_origins' => [
        env('FRONTEND_URL', 'http://localhost:3000', /*'https://local-events-front-green.vercel.app/'*/ ),
    ],

    // Permite definir patrones de orígenes permitidos usando expresiones regulares.
    'allowed_origins_patterns' => [],

    // Especifica los encabezados HTTP permitidos en las solicitudes.
    // Considerar usar '*' solo en desarrollo. En producción, listar explícitamente los encabezados.
    'allowed_headers' => ['Content-Type', 'Authorization', 'X-Requested-With', 'Accept', 'Origin'],

    // Define los encabezados que se exponen a la respuesta de la solicitud.
    'exposed_headers' => [],

    // Define el tiempo máximo en segundos que los resultados de una solicitud CORS *preflight* pueden ser almacenados en caché por el navegador.
    'max_age' => 86400, // Tiempo en segundos. 86400 = 24 horas.

    // Permite el uso de credenciales como cookies o tokens en las solicitudes CORS.
    'supports_credentials' => true, // Correcto si se usa Sanctum para SPA o autenticación basada en cookies/tokens.
];