<?php 
include 'connection.php';
include 'session.php';

$q=mysqli_query($conn,"SELECT * from booking where userID='$login_userid'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #101010;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        #booking-history {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ffcc00;
            border-radius: 8px;
            background-color:#101010;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 600px;
            font-size: x-large;
        }

        h2 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        .booking-item {
            border-bottom: 1px solid #ffcc00;
            padding: 15px;
            margin-bottom: 15px;
        }

        .hotel-name {
            color: #ffffff;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .house-address {
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .room-type {
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .duration {
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .amount {
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .remaining-days {
            color: #ffffff;
            font-size: 14px;
        }

        .other-features {
            color: #ffffff;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="booking-history">
        <h2>Booking History</h2>
        <p>Hello <?php echo $login_session;?> Here Are your Booking History</p>
        <?php
        while($r=mysqli_fetch_assoc($q)){
            $qr=mysqli_query($conn,"SELECT DISTINCT image_name,location FROM uploads WHERE articleID={$r['articleID']}");
            $ld=mysqli_query($conn,"SELECT * FROM Payment WHERE booking_id={$r['booking_id']}");
            $x=mysqli_fetch_assoc($ld);
            $qr=mysqli_query($conn,"SELECT image_name,location FROM uploads WHERE articleID={$r['articleID']}");
             $g=mysqli_fetch_assoc($qr);
        echo  '<div class="booking-item">
            <div class="hotel-name">'.$g['image_name'].'</div>
            <div class="house-address">'.$g['location'].'</div>
            <div class="room-type">Deluxe Room</div>
            <div class="duration">Stay: 2024-02-01 to'.$r['bookingtime'].'</div>
            <div class="amount">Paid:'.$r['amount'].'$</div>
            <div class="remaining-days">Payment method:'.$x['payment_method'].' </div>
            <div class="other-features">Free Wi-Fi, Breakfast included</div>
            <div class="other-features">Swimming pool access</div>
        </div>';
        }
        ?>
        
        <!-- Add more booking items as needed -->

    </div>

</body>

</html>