<?php
include 'connection.php';
include 'session.php';
$selected_articleID=$_GET['articleID'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Dashboard</title>
    <style>
        body {
            background-color: #101010;
            color: #ffcc00;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        form {
            background-color: #101010;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 204, 0, 0.5);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ffcc00;
            border-radius: 5px;
            background-color: #101010;
            color: #ffcc00;
        }

        button {
            background-color: #ffcc00;
            color: #101010;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #ff9900;
        }
    </style>
</head>
<body>
    <form action="Amount.php" method="post">
        <h2>Booking Form</h2>
        
        <!-- Hidden input fields for user ID and house ID -->
        <input type="hidden" name="userID" value="<?php echo $login_session; ?>">
        <input type="hidden" name="articleID" value="<?php echo $selected_articleID; ?>">

        <label for="duration">Time of booking:</label>
        <input type="number" name="duration" required min="1">
        <label for="duration">Number of people:</label>
        <input type="number" name="people_number" required min="1">


        <button type="submit">Book Now</button>
    </form>
</body>
</html>
