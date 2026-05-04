<?php

declare(strict_types=1);

/**
 * Runs the Laravel dev stack via concurrently. Pail is omitted when pcntl
 * is unavailable (e.g. PHP on Windows), so --kill-others does not tear down
 * serve, queue, and Vite.
 */
$hasPcntl = function_exists('pcntl_fork');

if ($hasPcntl) {
    $cmd = 'npx concurrently -c "#93c5fd,#c4b5fd,#fb7185,#fdba74" '
        . '"php artisan serve" '
        . '"php artisan queue:listen --tries=1 --timeout=0" '
        . '"php artisan pail --timeout=0" '
        . '"npm run dev" '
        . '--names=server,queue,logs,vite --kill-others';
} else {
    $cmd = 'npx concurrently -c "#93c5fd,#c4b5fd,#fdba74" '
        . '"php artisan serve" '
        . '"php artisan queue:listen --tries=1 --timeout=0" '
        . '"npm run dev" '
        . '--names=server,queue,vite --kill-others';
}

passthru($cmd, $exitCode);
exit($exitCode);
