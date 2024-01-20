<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        #dashboard {
            background-color: #101010;
            color: #ffcc00;
            text-align: center;
            padding: 20px;
        }

        #rating-container {
            margin: 20px;
            padding: 20px;
            background-color: #ffcc00;
            border-radius: 8px;
            box-shadow: 0 0 10px #101010;
        }

        

        #submit-btn {
            background-color: #101010;
            color: #ffcc00;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #submit-btn:hover {
            background-color: #ffcc00;
        }
    </style>
</head>
<body>
    <div id="dashboard">
        <h2>Customer Rating Message</h2>
    </div>

    <div id="rating-container">
        <h3>Rate our services</h3>
       <form action="" method="POST"> 
        
      <label for="">Username</label>
      <input type="email" name="username" id="username" placeholder="email" required> <br><br>
      <label for="">Subject</label>
      <input type="text" name="subject" placeholder="subject" id="subject" required> <br><br>
      <label for="">Location</label>
      <input type="text" name="location" placeholder="location" id="subjec" required> <br>
        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter your comments" required></textarea><br>

        <button id="submit-btn" onclick="submitRating()">Submit Rating</button>
    </div></form>
    



    <?php
include 'connection.php';

if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username = $_POST['username'];
        $subject = $_POST['subject'];
        $Location = $_POST['location'];
        $comments = $_POST['comments'];

    
        $sql = "INSERT INTO comments_tb (username, subject,Location, comment) VALUES ('$username', '$subject','$Location', '$comments')";
        $connect=mysqli_query($conn,$sql);
        if($connect)
        {
            echo "Data inserted";
        }
        else {
        echo "Error:".$sql."<br>".$conn->error;
        }
    }
    $conn->close();
?>

    <script>
        function submitRating() {
            var rating = document.querySelectorAll('#rating span.active').length;

            var comments = document.getElementById('comments').value;

           
            //alert('Rating: ' + rating + '\nComments: ' + comments);
        }

        var ratingStars = document.querySelectorAll('#rating span');
        ratingStars.forEach(function(star) {
            star.addEventListener('click', function() {
                this.classList.toggle('active');
                var previousStars = Array.from(this.parentElement.children).slice(0, Array.from(this.parentElement.children).indexOf(this));
                previousStars.forEach(function(prevStar) {
                    prevStar.classList.remove('active');
                });
            });
        });
    </script>
</body>
</html>