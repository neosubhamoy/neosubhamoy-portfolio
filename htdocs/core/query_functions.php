<?php
//function to fetch all records of the given table
function fetch_all_records($conn, $table_name) {
    $sql = "SELECT * FROM $table_name";
    $result = $conn -> query($sql);
    return $result;
}

//function to create an array of all unique project years
function create_project_years_array($conn) {
    $sql = "SELECT DISTINCT year FROM projects ORDER BY year DESC";
    $result = $conn -> query($sql);

    if ($result) {
        $years = array();
        while ($row = $result -> fetch_assoc()) {
            $years[] = $row['year'];
        }

        return $years;
    }
}

//function to fetch all projects of the given year
function fetch_projects_by_year($conn, $year) {
    $sql = "SELECT * FROM projects WHERE year = $year ORDER BY id DESC";
    $result = $conn -> query($sql);
    return $result;
}

//function to fetch social link of the given platform
function fetch_social_link($conn, $platform_name) {
    $sql = "SELECT link FROM socials WHERE platform = '$platform_name'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();
        return $row['link'];
    }
    else {
        return "#";
    }
}

//function to fetch social icon of the given platform
function fetch_social_icon($conn, $platform_name) {
    $sql = "SELECT icon FROM socials WHERE platform = '$platform_name'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();
        return $row['icon'];
    }
}

//---functions to fetch search results starts here---
//from projects table
function fetch_search_results_projects($conn, $keyword) {
    $sql = "SELECT * FROM projects WHERE name LIKE '%$keyword%'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as &$element) {
            $element['tag'] = 'project';
        }
        return $result;
    }
    else {
        return array();
    }
}

//from socials table
function fetch_search_results_socials($conn, $keyword) {
    $sql = "SELECT * FROM socials WHERE platform LIKE '%$keyword%'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as &$element) {
            $element['tag'] = 'social';
        }
        return $result;
    }
    else {
        return array();
    }
}

//for pages table
function fetch_search_results_pages($conn, $keyword) {
    $sql = "SELECT * FROM pages WHERE name LIKE '%$keyword%'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as &$element) {
            $element['tag'] = 'page';
        }
        return $result;
    }
    else {
        return array();
    }
}

//for quick_actions table
function fetch_search_results_quickactions($conn, $keyword) {
    $sql = "SELECT * FROM quick_actions WHERE name LIKE '%$keyword%'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as &$element) {
            $element['tag'] = 'action';
        }
        return $result;
    }
    else {
        return array();
    }
}
?>