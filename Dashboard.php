<?php
include 'connection.php';
include 'session.php';

if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];
    $sql = "SELECT * FROM uploads WHERE image_name LIKE '%$searchTerm%'";
} else {
    $sql = "SELECT * FROM uploads";
}

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
        }

        #both {
            background-color: #101010;
            color: #ffcc00;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #000;
        }

        #dashboard {
            display: flex;
            justify-content: space-between;
            background-color: #ecf0f1;
            padding: 10px;
        }

        #dashboard ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #dashboard li {
            margin-left: 15px;
        }

        #dashboard li a {
            text-decoration: none;
            padding: 10px;
            color: black;
            background-color: #ffcc00;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #dashboard li a:hover {
            background-color: green;
            color: #fff;
        }

        #logoutBtn {
            padding: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #logoutBtn:hover {
            background-color: #c0392b;
        }#full {
            width: 100%;
            min-height: 100vh;
            background-color: #ffcc00;
            margin-top: -50px;
        }

        .top {
            background-color: #101010;
            color: #ffcc00;
            padding: 15px;
            text-align: center;
        }

        .top img {
            width: 50px;
            height: 50px;
        }

        .top input {
            width: 70%;
            max-width: 300px;
            height: 35px;
            border-radius: 10px;
            color: yellow;
            margin-top: 10px;
        }

        ::placeholder {
            color: yellow;
        }

        i {
            color: blue;
            position: relative;
            cursor: pointer;
        }

       

        #footer {
            display: flex;
            justify-content: space-around;
            background-color: #818181;
            padding: 20px;
            color: #fff;
        }

        .lef,
        .centere,
        .right {
            text-align: center;
        }

        .right img {
            width: 20px;
            height: 20px;
            border-radius: 100%;
        }

        div button {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .details>div {
                width: 100%;
            }

            .top input {
                width: 100%;
            }
        }
    
    

    #full {
        margin-top: -100px;
            width: 100%;
            min-height: 100vh;
            background-color: #fff;
        }

        .top {
            
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .top img {
            width: 50px;
            height: 50px;
        }

        .top input {
            width: 70%;
            max-width: 300px;
            height: 35px;
            border-radius: 10px;
            color: blue;
            margin-top: 10px;
        }

        ::placeholder {
            color: #ffcc00;
        }

        i {
            color: #ffcc00;
            position: relative;
            cursor: pointer;
        }


        .house-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
            padding: 20px;
            margin-left: 30px;
            color: #ffcc00;
        }

        .house-container .hidden {
            display: none;
        }
        .house-container img {
            width: 340px;
            height: 220px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 8px;
           /* display: <?php echo isset($_POST['search']) ? 'block' : 'none'; ?>;*/
        }

        #footer {
            display: flex;
            justify-content: space-around;
            background-color: #101010;
            padding: 20px;
            color: #ffcc00;
        }

        .lef,
        .centere,
        .right {
            text-align: center;
        }

        .right img {
            width: 20px;
            height: 20px;
            border-radius: 100%;
        }

        div button {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .details>div {
                width: 100%;
            }

            .top input {
                width: 100%;
            }
        }
        .top b{
            color: #ffcc00;
        }
    </style>
    <script>
        function Logout(){
            window.location.href='WEBDESIGN.php';
        }
    </script>
</head>
<body>
    <div id="both">
        <h2>Hello <?php echo $login_session;?>! Welcome to your Dashboard</h2>
    </div> 
    <div id="dashboard">
        <ul>
            <li><a href="bookinghistory.php">MY Bookings</a></li>
            <li><a href="rate-us.php">Rate Us</a></li>
        </ul>
        <button id="logoutBtn" onclick="Logout()">Logout</button>
    </div>


<div id="full">
        <div class="top">
            <b>GET LODGES AND ACCOMMODATIONS EASILY</b><br><b>ESAC</b>
            <form method="post" action="">
                <center>
                    <input type="search" placeholder="search place" name="searchTerm" id="searchBox">
                    <button type="submit" name="search"><i class="fa fa-search"></i></button>
                </center>
            </form>
        </div>
    <div class="house-container">
    
    <?php
        while ($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<a href="deteal.php?id=' . $row['articleID'] . '">';
            echo '<img src="' . $row['image'] . '" alt="Your Image" width="300" height="auto">';
            echo '</a>';
            echo '<h2>' . $row['image_name'] . '</h2>';
            echo '<p>' . $row['Description'] . '</p>';
            echo '<p>Price: ' . $row['price'] . '</p>';
            echo '<p>Phone: ' . $row['phone_number'] . '</p>';
            echo '</div>';
        }
        ?>

<?php include 'connection.php' ?>

<body background-color= "rgb(245, 236, 236)" color="blueviolet" style="overflow-x:hidden"">
    
            
        <?php
 /*       
if (isset($_POST[''])) {
    $searchTerm = $_POST['searchTerm'];

$id = isset($_GET['id']) ? $_GET['id'] : '';
$width = 100;
$height = 100;

$sql = "SELECT * FROM uploads";
$result = $conn->query($sql);
$result = $conn->query($sql);

if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    $articleID = $row['articleID'];
    $imagePath = $row['image'];
    $title = $row['image_name'];
    $Description=$row['Description'];
    $price = $row['price'];
    $phone = $row['phone_number'];
    
    
    echo '<div>';
    echo '<a href="deteal.php?id=' . $articleID . '">';
    echo '<img src="' . $imagePath . '" alt="Your Image" width="300" height="auto">';
    echo '</a>';
    echo '<h2>' . $title . '</h2>';
    echo'<p>'.$Description.'</p>';
    echo '<p>'.'Price: ' . $price . '</p>';
    echo '<p>'.'Phone: ' . $phone . '</p>';
    
    echo '</div>';
}}*/
?>
      
</div>
        <div id="footer" display="flex">

            <div class="lef">
                <h3><b>GET IN TOUCH</b></h3>
                <b>phone +250788884407</b><br>
                <b>Location:KIGALI-GISOZI</b><br>
                <em> Email: stayesac@gmail.com</em><br>
                <i class="fa fa-whatsapp">Whatsapp:+250788484407</i>
                
            </div>
            <div class="centere">
                <h3><strong>VISIT OUR WEBSITE</strong></h3>
                <a href=""><i class="fa fa-facebook"></i></a>Facebook:Accomogate official</i><br>
                <a href=""><i class="fa fa-instagram"></i></a>Instragram:Easy Stay Access</i><br>
                <a href=""><i class="fa fa-linkedin"></i></a>Linkedin:Easy Stay Access</i><br>
                <a href=""><i class="fa fa-twitter"></i></a>twitter:ESAC Rwanda</i>
                
            </div>
            <div class="right">
                <h3><b><strong>Easy Stay Access Company ESAC</strong></b></h3>
                <img height="20px" src="d.jpg" alt="">
                
            </div>
        </div>
    </div>
</body>
</html>