<?php

return [
    App\Providers\AppServiceProvider::class,
    // Add other providers here if needed
];

// If withRouting is needed, it should be called within an appropriate context
// Example:
$app->withRouting(
    api: __DIR__ . '/../routes/api.php',
    apiPrefix: 'api/admin',
    // ...
);
