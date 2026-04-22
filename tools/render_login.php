<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo view('login')->render();
} catch (Throwable $e) {
    echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString();
}
