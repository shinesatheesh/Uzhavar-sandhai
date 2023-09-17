<?php

$uname1 = $_POST['uname1'];
$email = $_POST['email'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];
$numbe = $_POST["numbe"];
$paddress = $_POST["paddress"];

// Check if any required field is empty
if (empty($uname1) || empty($email) || empty($upswd1) || empty($upswd2) || empty($numbe)) {
    echo "Please fill in all required fields.";
    die();
}

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "uzhavar";

// Create connection
$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (!$con) {
    die("Failed to connect to the database: " . mysqli_connect_error());
}

// Check if the username already exists in the database
$qu = "SELECT uname1 FROM register WHERE uname1='$uname1'";
$re = mysqli_query($con, $qu);
if (mysqli_num_rows($re) > 0) {
    echo "Username already registered. Please choose a different username.";
    die();
}

// Check if passwords match
if ($upswd1 !== $upswd2) {
    echo "Passwords do not match.";
    die();
}

// Use prepared statements to insert data securely
$que = "INSERT INTO register (uname1, email, numbe, paddress, upswd1, upswd2) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $que);
if (!$stmt) {
    echo "Error in the database query: " . mysqli_error($con);
    die();
}

// Bind parameters to the prepared statement
mysqli_stmt_bind_param($stmt, "ssssss", $uname1, $email, $numbe, $paddress, $upswd1, $upswd2);

// Execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    header("Location: index.html");
    exit;
} else {
    echo "Error in inserting data: " . mysqli_error($con);
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    // header("Location: register.html");
    exit;
}
