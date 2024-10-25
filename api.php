<?php
// Optional security key to restrict access (for example)
$securityKey = "YOUR_SECURITY_KEY"; // replace with a unique key

if (isset($_GET['lightStatus'])) {
    // Optional security check
    if (!isset($_GET['key']) || $_GET['key'] !== $securityKey) {
        echo "Unauthorized access";
        exit;
    }
    
    $status = $_GET['lightStatus'];
    $timestamp = date("Y-m-d H:i:s");

    // Store the light status with a timestamp in a JSON format
    $logData = [
        "status" => $status,
        "timestamp" => $timestamp
    ];
    
    // Append the new status to the file
    file_put_contents('light_status.json', json_encode($logData) . PHP_EOL, FILE_APPEND);

    echo "Light status updated to: $status at $timestamp";
} else {
    echo "No status provided";
}
?>
