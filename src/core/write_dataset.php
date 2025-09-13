<?php
function write_dataset($conn) {
    $data = array(
        'email' => fetch_quick_action_link($conn, "Send Email"),
        'chat' => fetch_quick_action_link($conn, "Chat Online"),
        'sources' => fetch_quick_action_link($conn, "Source Code"),
    );

    $json_data = json_encode($data, JSON_PRETTY_PRINT);
    $json_file_path = 'assets/dataset.json';
    file_put_contents($json_file_path, $json_data);
}
?>