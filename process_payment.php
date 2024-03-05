<?php
include 'db_connection.php'; // Include database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $amount = $_POST['amount'];
    
    // Insert payment data into database
    $sql = "INSERT INTO payments (full_name, email, address, city, dob, gender, amount)
            VALUES ('$fullName', '$email', '$address', '$city', '$dob', '$gender', '$amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close database connection
    $conn->close();
}
?>
