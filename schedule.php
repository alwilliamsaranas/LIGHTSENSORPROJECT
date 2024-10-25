<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timeOn = $_POST['timeOn'];
    $timeOff = $_POST['timeOff'];

    // Save scheduled times to a file (can be used later to control light)
    file_put_contents('schedule.txt', "ON: $timeOn\nOFF: $timeOff");

    echo "Light scheduled from $timeOn to $timeOff.";
}
?>
