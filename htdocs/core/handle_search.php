<?php
require 'connection.php';
require 'query_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $results_projects = fetch_search_results_projects($conn, $keyword);
        $results_socials = fetch_search_results_socials($conn, $keyword);

        $results = [];
        foreach ([$results_projects, $results_socials] as $array) {
            if (!empty($array)) {
                $results = array_merge($results, $array);
            }
        }

        if(!empty($results)) {
            echo json_encode($results);
        }
        else {
            echo json_encode(array('results' => 'none', 'message' => ': ( &nbsp; No Results Found'));
        }
    }
}
?>