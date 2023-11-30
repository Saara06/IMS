<?php
// Establish a connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_student";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Student Information
    $name = $_POST["name"];
    $rollNo = $_POST["rollNo"];
    $facultyMentor = $_POST["facultyMentor"];

    // Industry Information
    $industryName = $_POST["industryName"];
    $industryAddress = $_POST["industryAddress"];
    $industryMentorName = $_POST["industryMentorName"];
    $industryMentorDesignation = $_POST["industryMentorDesignation"];
    $industryMentorContact = $_POST["industryMentorContact"];
    $industryMentorEmail = $_POST["industryMentorEmail"];

    // Internship Source
    $gecPlacement = $_POST["gecPlacement"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO internship_data (name, rollNo, facultyMentor, industryName, industryAddress, industryMentorName, industryMentorDesignation, industryMentorContact, industryMentorEmail, gecPlacement) VALUES ('$name', '$rollNo', '$facultyMentor', '$industryName', '$industryAddress', '$industryMentorName', '$industryMentorDesignation', '$industryMentorContact', '$industryMentorEmail', '$gecPlacement')";

    /*if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    */
   
if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}
    
}

// Check if the form is submitted


// Close the database connection
$conn->close();
?>
