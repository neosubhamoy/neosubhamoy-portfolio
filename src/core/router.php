<?php
//---controls page routing (url & links)

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri !== '/') {
    $uri = rtrim($uri, '/');
}

$routes = [
    '/' => 'pages/home.php',
    '/projects' => 'pages/projects.php',
    '/blog' => 'pages/blog.php',
    '/contact' => 'pages/contact.php',
    '/privacy-policy' => 'pages/policy.php',
    '/terms-of-use' => 'pages/terms.php',
    '/dmca' => 'pages/dmca.php',
    '/api/contact' => 'core/handle_contact.php',
    '/api/search' => 'core/handle_search.php',
];

function routeTraffictToPages($uri, $routes) {
    global $basePath, $domain;
    if(array_key_exists($uri, $routes)) {
        require __DIR__ . '/../' . $routes[$uri];
    }
    else {
        error_page(404);
    }
}

function error_page($status_code) {
    global $basePath, $domain;
    http_response_code($status_code);
    require __DIR__ . "/../pages/error/{$status_code}.php";
    die();
}

routeTraffictToPages($uri, $routes);
?>
