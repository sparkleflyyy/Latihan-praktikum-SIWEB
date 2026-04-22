<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';

// Boot the framework partially to allow Eloquent usage
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$u = User::where('email', 'admin@gmail.com')->first();
if ($u) {
    echo "FOUND:" . PHP_EOL;
    echo "name=" . $u->name . PHP_EOL;
    echo "email=" . $u->email . PHP_EOL;
    echo "password ok=" . (Hash::check('123', $u->password) ? 'YES' : 'NO') . PHP_EOL;
} else {
    echo "no user\n";
}
