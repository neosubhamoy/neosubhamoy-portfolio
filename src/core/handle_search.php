<?php
function input_filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keyword'])) {
        $keyword = input_filter($_POST['keyword']);
        $results = array_merge(
            search_table("projects", "name", $keyword, "project"),
            search_table("socials", "platform", $keyword, "social"),
            search_table("pages", "name", $keyword, "page"),
            search_table("quick_actions", "name", $keyword, "action"),
            search_table("profile", "name", $keyword, "profile")
        );

        if(!empty($results)) {
            echo json_encode($results);
        }
        else {
            echo json_encode(array('results' => 'none', 'message' => ': ( &nbsp; No Results Found'));
        }
    }
}
?>
