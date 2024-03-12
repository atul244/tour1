<?php
$hostname = "localhost"; // Replace with your database server hostname
$username = ""; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "tour"; // Replace with your database name

// Create a connection to the MySQL database
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle data sent from the form

    echo "Data is entered correctly"
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $start_day = $_POST['sday'];
    $end_day = $_POST['eday'];
    $person = $_POST['person'];

    // Insert data into the "clients" table
    $sql = "INSERT INTO clients (first_name, last_name, email, start_day, end_day, person) VALUES ('$first_name', '$last_name', '$email' , '$start_day' , '$end_day' , '$person')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
