<?php
//---controls page routing (url & links)

$host = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$serverRoutes = [
    '/' => 'pages/home.php',
    '/projects' => 'pages/projects.php',
    '/blog' => 'pages/blog.php',
    '/contact' => 'pages/contact.php',
    '/privacy-policy' => 'pages/policy.php',
    '/terms-of-use' => 'pages/terms.php',
    '/dmca' => 'pages/dmca.php',
];

$devRoutes = [
    '/neosubhamoy/src/' => 'pages/home.php',
    '/neosubhamoy/src/projects' => 'pages/projects.php',
    '/neosubhamoy/src/blog' => 'pages/blog.php',
    '/neosubhamoy/src/contact' => 'pages/contact.php',
    '/neosubhamoy/src/privacy-policy' => 'pages/policy.php',
    '/neosubhamoy/src/terms-of-use' => 'pages/terms.php',
    '/neosubhamoy/src/dmca' => 'pages/dmca.php',
];

if ($host == "localhost" || $host == $_ENV['LOCAL_IP']) {
    $routes = $devRoutes;
}
else {
    $routes = $serverRoutes;
}

function routeTraffictToPages($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }
    else {
        error_page(404);
    }
}

function error_page($status_code) {
    http_response_code($status_code);
    require "pages/error/{$status_code}.php";
    die();
}

routeTraffictToPages($uri, $routes);
?>