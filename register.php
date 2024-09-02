<?php
include_once 'connn.php';

if(isset($_POST['reg'])){
    // Get form data
    $name = $_POST["name"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $courseName = $_POST["course-name"];
   
    
    // Check if 'type' is set in the $_POST array
    $courseType = isset($_POST["type"]) ? $_POST["type"] : '';

    // Check if 'duration' is set in the $_POST array and is an array
    $checkedLabels = isset($_POST["duration"]) && is_array($_POST["duration"]) ? $_POST["duration"] : array();

     // Get the label text of the checked checkboxes
     $courseDuration = implode(", ", array_map(function($label) {
        return htmlentities($label); // Ensure proper encoding
    }, $checkedLabels));

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (username, password, number, email, address, course_name, course_type, course_duration)
            VALUES ('$name', '$password', '$number', '$email', '$address', '$courseName', '$courseType', '$courseDuration')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
