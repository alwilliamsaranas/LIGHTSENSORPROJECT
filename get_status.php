<?php
// Read the latest light status from the JSON file
$statuses = file('light_status.json', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$latestStatus = end($statuses); // Get the last status logged

if ($latestStatus) {
    echo $latestStatus; // Output the latest status
} else {
    echo "No light status recorded.";
}
?>
