<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["userID"];
    $password = $_POST["password"];
    if($username == 'admin')
        if($password == 'admin'){
            echo "Entered password is correct, redirecting...";
            header("Refresh:3; url = admin_dashboard.html");
        }
            
        else{
            echo "Wrong password entered";
            header("Refresh:3; url = admin.html");
        }
 }
?>