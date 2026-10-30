<?php
//---router for local dev with php's built-in server (npm run serve)
//serves existing files from public/ as-is, everything else goes through api/index.php like on vercel
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($path !== '/' && is_file(__DIR__ . '/public' . $path)) {
    return false;
}
require __DIR__ . '/api/index.php';
