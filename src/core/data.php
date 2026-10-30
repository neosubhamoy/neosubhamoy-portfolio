<?php
//function to load site data from data/site.json (cached per request)
function site_data() {
    static $data = null;
    if ($data === null) {
        $data = json_decode(file_get_contents(__DIR__ . '/../../data/site.json'), true);
    }
    return $data;
}

//function to find the first record of the given table where field matches value
function find_record($table_name, $field, $value) {
    foreach (fetch_all_records($table_name) as $record) {
        if ($record[$field] === $value) {
            return $record;
        }
    }
    return null;
}

//function to fetch all records of the given table
function fetch_all_records($table_name) {
    return site_data()[$table_name] ?? [];
}

//function to create an array of all unique project years
function create_project_years_array() {
    $years = array_unique(array_column(fetch_all_records("projects"), 'year'));
    rsort($years);
    return $years;
}

//function to fetch all projects of the given year
function fetch_projects_by_year($year) {
    $projects = array_filter(fetch_all_records("projects"), fn($project) => $project['year'] == $year);
    usort($projects, fn($a, $b) => $b['id'] <=> $a['id']);
    return $projects;
}

//function to fetch social link of the given platform
function fetch_social_link($platform_name) {
    return find_record("socials", "platform", $platform_name)['link'] ?? "#";
}

//function to fetch social icon of the given platform
function fetch_social_icon($platform_name) {
    return find_record("socials", "platform", $platform_name)['icon'] ?? null;
}

//function to fetch page title
function fetch_page_title($page_name) {
    return find_record("pages", "name", $page_name)['title'] ?? null;
}

//function to fetch quick actions link
function fetch_quick_action_link($action_name) {
    return find_record("quick_actions", "name", $action_name)['link'] ?? null;
}

//function to fetch featured projects
function fetch_featured_projects() {
    return array_values(array_filter(fetch_all_records("projects"), fn($project) => $project['is_featured']));
}

//function to fetch search results from the given table (case-insensitive match on field or stag)
function search_table($table_name, $field, $keyword, $tag) {
    $results = [];
    foreach (fetch_all_records($table_name) as $record) {
        if (stripos($record[$field], $keyword) !== false || stripos($record['stag'] ?? '', $keyword) !== false) {
            $record['tag'] = $tag;
            $results[] = $record;
        }
    }
    return $results;
}
?>
