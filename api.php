<?php
if (isset($_GET['lightStatus'])) {
    $status = $_GET['lightStatus'];
    
    // Store the light status in a file or a database
    file_put_contents('light_status.txt', "Light is: $status\n", FILE_APPEND);
    
    echo "Light status updated to: $status";
} else {
    echo "No status provided";
}
?>
