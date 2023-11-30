<?php
// File path for announcements
$announcementsFile = "announcements.txt";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the new announcement from the form
    $newAnnouncement = $_POST["newAnnouncement"];

    // Open the file for appending
    $file = fopen($announcementsFile, "a");

    // Add the new announcement to the file
    fwrite($file, $newAnnouncement . PHP_EOL);

    // Close the file
    fclose($file);

    // Redirect back to the add_announcement.php page
    header("Location: add_announcement.php");
    exit();
}
?>
