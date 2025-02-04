<?php
session_start();
include('includes/config.php');

// Check if user is logged in
if (!isset($_SESSION['aid'])) {
    header('location:index.php');
    exit;
}

// Get current user details
$adminId = $_SESSION['aid'];
$username = $_SESSION['username'];
$userType = $_SESSION['usertype']; // Assuming this is set when user logs in

// Get restaurant and subadmin from the request (you might need to adjust this depending on your form)
$restaurant = $_POST['restaurant']; // or $_GET['restaurant'] depending on your form method
$subadmin = $_POST['subadmin']; // or $_GET['subadmin'] depending on your form method

// Fetch subadmin details for the restaurant
$query = mysqli_query($con, "SELECT AdminuserName FROM tbladmin WHERE AdminName='$subadmin'");
$row = mysqli_fetch_array($query);

if ($row) {
    $subadminUsername = $row['AdminuserName'];

    // Check if the current user is the main admin or the subadmin for the restaurant
    if ($userType == '1' || $username == $subadminUsername) {
        // Proceed with updating booking details
        // Your existing code to update booking details goes here
        $bookingDetails = $_POST['bookingDetails']; // Example, adjust as needed
        $updateQuery = mysqli_query($con, "UPDATE bookings SET details='$bookingDetails' WHERE restaurant='$restaurant'");

        if ($updateQuery) {
            echo "Booking details updated successfully.";
        } else {
            echo "Error updating booking details.";
        }
    } else {
        // Deny access
        echo "Access denied.";
    }
} else {
    echo "Invalid restaurant or subadmin.";
}
?>

