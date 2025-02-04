<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Kushalya@7";
$dbname = "rtbsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$adminType = $_POST['adminType'];
$AdminName = $_POST['AdminName'];
$AdminuserName = $_POST['AdminuserName'];
$MobileNumber = $_POST['MobileNumber'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Determine which table to insert data into
if ($adminType == 'Abhiruchi') {
    $table = 'tbladmin_abhiruchi';
} else if ($adminType == 'Suprabath') {
    $table = 'tbladmin_suprabath';
} else {
    die("Invalid admin type selected.");
}

// Insert data into the appropriate table
$sql = "INSERT INTO $table (AdminName, AdminuserName, MobileNumber, Email, Password) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $AdminName, $AdminuserName, $MobileNumber, $Email, $Password);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
