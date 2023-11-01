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
?>