<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>

<?php
// // Check if the form is submitted
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_student";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT COUNT(1) FROM internship_data";
$res = $conn->query($sql);
$array = $res->fetch_array();
$count = 80 - $array[0];
// $new_count = $conn->query($sql)
// $sql = "SELECT COUNT(name) FROM intership_data";
// // if ($_SERVER["REQUEST_METHOD"] == "POST") {
// //     // Increment the counter
// //     $counterFile = "counter.txt";
// //     $counter = intval(file_get_contents($counterFile));
// //     $counter--;
// //     file_put_contents($counterFile, $counter);
// // }
// $counter = $new_count;
// $counterFile = "counter.txt";
// file_put_contents($counterFile,$counter)
?>

<h1>Student Form</h1>

<form action="process_form.php" method="post">
    <!-- Your form fields go here -->
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <!-- Add other form fields here -->

    <button type="submit">Submit</button>
</form>

<?php
// Display the remaining count
echo "<div>Total Students: 80 | Remaining: $count</div>";
?>

</body>
</html>
