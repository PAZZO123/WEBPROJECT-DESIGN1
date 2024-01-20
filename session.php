<?php
include 'connection.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login_user'])) {
    header("location: loginpart.php");
    die();
}

// Fetch the Firstname from the house table
$user_check = $_SESSION['login_user'];
$query = mysqli_query($conn, "SELECT Firstname,userID FROM house WHERE Firstname = '$user_check'");

if ($query) {
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $login_session = $row['Firstname'];
    $login_userid=$row['userID'];

} else {
    // Handle query error
    die("Error: " . mysqli_error($conn));
}
?>
