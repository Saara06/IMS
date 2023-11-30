<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Announcements</title>
</head>

<body>
    <header>
        <h1>View Announcements</h1>
    </header>

    <main>
        <h2>Latest Announcements</h2>
        <ul>
            <?php
            // File path for announcements
            $announcementsFile = "announcements.txt";

            // Check if the file exists
            if (file_exists($announcementsFile)) {
                // Read announcements from the file
                $announcements = file($announcementsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                // Display announcements
                foreach ($announcements as $announcement) {
                    echo "<li>$announcement</li>";
                }
            } else {
                echo "<p>No announcements available.</p>";
            }
            ?>
        </ul>
    </main>
</body>

</html>
