<?php
// function to format given number in youtube views style
function format_number_in_yt_style($num) {
    if ($num >= 1000000000) {
        return number_format($num / 1000000000, 1) . 'B';
    } elseif ($num >= 1000000) {
        return number_format($num / 1000000, 1) . 'M';
    } elseif ($num >= 1000) {
        return number_format($num / 1000, 1) . 'K';
    } else {
        return $num;
    }
}
?>