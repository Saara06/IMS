<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Announcement</title>
</head>

<body>
    <header>
        <h1>Add Announcement</h1>
    </header>

    <main>
        <form method="post" action="process_add_announcement.php">
            <label for="newAnnouncement">Enter a new announcement:</label>
            <textarea name="newAnnouncement" cols="30" rows="5"></textarea>
            <br>
            <button type="submit">Add Announcement</button>
        </form>
    </main>
</body>

</html>
