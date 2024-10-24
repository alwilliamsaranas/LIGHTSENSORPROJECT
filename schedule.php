<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the time values from the form
    $timeOn = $_POST['timeOn'];
    $timeOff = $_POST['timeOff'];

    // Here you would save the schedule to a database or a file
    // For demonstration, we'll just return a success message
    echo "Light scheduled to turn ON at $timeOn and OFF at $timeOff.";
} else {
    echo "Invalid request method.";
}
?>
