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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Properties</title>
    
    <style>
        body {
            background-color: rgb(245, 236, 236);
            color: blueviolet;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
       

            #navlink{
                width: 100%;
                height: 120px;
                background: linear-gradient(45deg, #3498db, #2c3e50);
                margin-top: 30px;
                margin-top: -2%;
               /* position: fixed;
                z-index: 1000;
                top: 0;*/
                background-position: center;
                
                background-position: center;
                 display: flex;
                 justify-content: space-between;
                  align-items: center;
                 padding: 0 20px;
                 z-index: 1000;
                 /*position: fixed;*/
                 font-size: large;
            }
            ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            margin-right: 5px;
        }
    ul li{ 
       /* float: right;
        display: flex;
        padding: 10px;
        text-decoration: none;
        margin-right: 40px;
       margin-top: -40px;*/
       margin-right: 50px;
       
    } 
    ul li a{
        text-decoration: none;
        color: white;
    
    }
    .top center input{
            width: 300px;
            height: 35px;
            border-radius:10px;
            color: blue;
            position:relative;
        }
        ::placeholder{
            color: blue;
        }
        i{
            color: blue;
            right: 2%;
            position: relative;

        }

        .house-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
            padding: 20px;
            margin-left: 30px;
        }

        .house-container img {
            width: 340px;
            height: 220px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    }
.lef,
.centere,
.right{
    margin-top: 40px;
}
div ul li a:hover {
            color: #f39c12;
        }
        h2{background:linear-gradient(45deg,yellow, skyblue,rgb(255, 213, 0)) ;
        color: transparent;
        -webkit-background-clip: text;
        margin-top: 20px;
    }
    #navlink img{
        margin-top: -20px;
        height: 50px;
        width: 60px;
        border-radius: 100%;
    }
    h3{
        margin-left: 55px;
        margin-top: -40px;
    }
    #navlink h2, #navlink img {
    margin-left: 15px;
}

#navlink h2 {
    margin-left: -400px; 
    margin-top: 70px;

}
#footer{
            display: flex;
            ;
            margin-top: 20px; /* Adjust this margin based on your design */
           position: relative;
              width: 100%;
            background-color: #818181;
            display: flex;
            justify-content: space-between;
            padding: 20px;
          z-index: 1000;
          margin-right: -70px;
        }
    #footer  img{border-radius: 100%;
                 height: 150px;


    }

    .right img{
   max-width:80px ; 
    max-height: 80px;
}
.lef, .centere, .right {
    flex: 1;
}
table tr{
    display: flex;
}
button{
    background: linear-gradient(45deg, #3498db, #2c3e50);
    height: 30px;
    border-radius: 4px;
}
        
    </style>
</head>

<body>
<div>
    <div id="navlink">
        <!-- <h2>Get Accomodation And Lodges Easly</h2>-->
         <img src="d.jpg" alt="" width="50px" height="50px"><h2>Easy Stay Access  Company</h2>
         <ul>
           <!-- <li> <span onclick="openNav()"><i class="fa fa-bars"></i></a></span><a href="" -->
             <li><a href="loginastenant.php">BOOKING</a></li>
             <li><a href="loginpart.php">LOGIN</a></li>
             <div class="fab"><li><a href="vist us.html" >CONTACT US</a></li></div>
             
             
         </ul>

     </div>

     <div class="top">
     <form method="post" action="">
                <center>
                    <input type="search" placeholder="search place" name="searchTerm" id="searchBox">
                    <button type="submit" name="search"><i class="fa fa-search"></i></button>
                </center>
            </form></div>

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