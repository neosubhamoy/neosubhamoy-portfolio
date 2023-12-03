<?php
require '../../connection.php';
require 'query_functions.php';

function input_filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $keyword = input_filter($keyword);
        $results_array = [
            $results_projects = fetch_search_results_projects($conn, $keyword),
            $results_socials = fetch_search_results_socials($conn, $keyword),
            $results_pages = fetch_search_results_pages($conn, $keyword),
            $results_quickactions = fetch_search_results_quickactions($conn, $keyword),
            $results_profiles = fetch_search_results_profiles($conn, $keyword)
        ];

        $results = [];
        foreach ($results_array as $array) {
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