<?php
  // Start the session
include 'session.php';
include 'connection.php';  // Include your database connection file

/* Check if user is logged in
if (!isset($_SESSION['userID'])) {
    // Handle not logged in user appropriately or redirect to login
    echo "Error: User not logged in.";
 */

// Retrieve house ID from the URL parameter
if (isset($_POST['articleID'])) {
    $articleID = $conn->real_escape_string($_POST['articleID']);
} else {
    // Handle case where articleID is not provided
    echo "Error: House ID not provided.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = $login_userid;  // Use session variable directly
    $articleID = $conn->real_escape_string($_POST['articleID']);
    $duration = $conn->real_escape_string($_POST['duration']);
    $people = $conn->real_escape_string($_POST['people_number']);

    // Additional validation for duration
    if (!is_numeric($duration) || $duration <= 0) {
        echo "Error: Invalid duration.";
        exit();
    }

    // Fetch the price from the uploads table
    $priceQuery = "SELECT price FROM uploads WHERE articleID = '$articleID'";
    $priceResult = $conn->query($priceQuery);
    $row = $priceResult->fetch_assoc();
    echo $row['price'];
    echo $articleID;

    if ($row > 0) {
        $price = $row['price'];


        // Calculate the total amount
        $amount = $price * $duration*$people;

        // Insert data into the booking table
        $bookingtime = date('Y-m-d H:i:s');  // Assuming you want to store the current timestamp
        $sql = "INSERT INTO booking (userID, articleID, amount, duration, bookingtime,people_number) 
                VALUES ('$userID', '$articleID', '$amount', '$duration', '$bookingtime','$people')";

        if ($conn->query($sql) === TRUE) {
            $q=mysqli_query($conn,"SELECT booking_id from booking where userID='$userID' and articleID='$articleID'");
            $r=mysqli_fetch_assoc($q);
            header("location:payment.php?booking_id=".urlencode($r['booking_id']));
        } else {
            echo "Error: Unable to process the booking. Please try again later.";
        }
    } else {
        echo "Error: House not found.";
    }
}

// Close the database connection
$conn->close();
?>
