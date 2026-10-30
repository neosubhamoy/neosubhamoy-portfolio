<?php
//---loads dependencies, environment and shared helpers for every request
require __DIR__ . '/../vendor/autoload.php';
Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->safeLoad();

//function to read an environment variable (from .env locally or from the platform on vercel)
function env($key, $default = null) {
    if (isset($_ENV[$key])) {
        return $_ENV[$key];
    }
    $value = getenv($key);
    return $value !== false ? $value : $default;
}

require __DIR__ . '/core/data.php';
require __DIR__ . '/core/utility_functions.php';
require __DIR__ . '/core/github_api_functions.php';

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https';
$basePath = ($isHttps ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$domain = env('DOMAIN', $_SERVER['HTTP_HOST']);
?>
