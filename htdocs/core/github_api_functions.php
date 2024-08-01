<?php
// function to fetch star and fork count of the given github repo
function fetch_repo_stats($repoName) {
    $url = "https://api.github.com/repos/" . $repoName;
    $token = $_ENV['GITHUB_ACCESS_TOKEN'];
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP script');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: token $token"
    ));
    
    $response = curl_exec($ch);
    
    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        echo "Error fetching data for repo '$repoName': $error";
        return [null, null];
    }
    
    curl_close($ch);
    $repoData = json_decode($response, true);
    
    $stargazersCount = isset($repoData['stargazers_count']) ? $repoData['stargazers_count'] : null;
    $forksCount = isset($repoData['forks_count']) ? $repoData['forks_count'] : null;
    
    return [$stargazersCount, $forksCount];
}
?>