<?php
require 'connection.php';
require 'query_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $results_projects = fetch_search_results_projects($conn, $keyword);
        $results_socials = fetch_search_results_socials($conn, $keyword);
        $results = array_merge($results_projects, $results_socials);
        echo json_encode($results);
    }
}
?>