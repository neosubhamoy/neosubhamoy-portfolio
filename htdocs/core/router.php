<?php
//---controls page routing (url & links)

$host = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$serverRoutes = [
    '/' => 'home.php',
    '/projects' => 'projects.php',
    '/blog' => 'blog.php',
    '/contact' => 'contact.php',
    '/privacy-policy' => 'policy.php',
    '/terms-of-use' => 'terms.php',
    '/dmca' => 'dmca.php',
];

$devRoutes = [
    '/neosubhamoy/htdocs/' => 'home.php',
    '/neosubhamoy/htdocs/projects' => 'projects.php',
    '/neosubhamoy/htdocs/blog' => 'blog.php',
    '/neosubhamoy/htdocs/contact' => 'contact.php',
    '/neosubhamoy/htdocs/privacy-policy' => 'policy.php',
    '/neosubhamoy/htdocs/terms-of-use' => 'terms.php',
    '/neosubhamoy/htdocs/dmca' => 'dmca.php',
];

if ($host == "localhost" || $host == "192.168.29.177") {
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
    require "error/{$status_code}.php";
    die();
}

routeTraffictToPages($uri, $routes);

?>