<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_student";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$counterFile = "counter.txt";  // Replace this with the actual path
$currentValue = intval(file_get_contents($counterFile));
$sql = "SELECT COUNT(1) FROM internship_data";
$res = $conn->query($sql);
$array = $res->fetch_array();
$count = 80 - $array[0];



// Modify the value (for example, decrement by 1)
// $newValue = $currentValue - 1;

// Write the updated value back to counter.txt
// file_put_contents($counterFile, $newValue);

// Display the updated value
echo "<div>Total Students: 80 | Remaining: $count </div>";

$sql = "SELECT * FROM internship_data";


$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Display table header
    echo "<h2>Internship Data</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Faculty Mentor</th>
                <th>Industry Name</th>
                <th>Industry Address</th>
                <th>Industry Mentor Name</th>
                <th>Industry Mentor Designation</th>
                <th>Industry Mentor Contact</th>
                <th>Industry Mentor Email</th>
                <th>GEC Placement</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['rollno']}</td>
                <td>{$row['facultyMentor']}</td>
                <td>{$row['industryName']}</td>
                <td>{$row['industryAddress']}</td>
                <td>{$row['industryMentorName']}</td>
                <td>{$row['industryMentorDesignation']}</td>
                <td>{$row['industryMentorContact']}</td>
                <td>{$row['industryMentorEmail']}</td>
                <td>{$row['gecPlacement']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
