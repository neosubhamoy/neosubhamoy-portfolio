<?php
require 'connection.php';
require 'query_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $results = fetch_search_results($conn, $keyword);
        echo json_encode($results);
    }
}
?>