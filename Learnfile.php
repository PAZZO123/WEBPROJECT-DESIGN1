<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #navlink {
            width: 100%;
            height: 100px;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            margin-top: 30px;
            margin-top: -2%;
            background-position: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            margin-top: 0; /* Adjusted margin-top */
            padding: 0 20px;
              position: relative;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        ul li {
            margin-right: 20px;
        }

        ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        ul li a:hover {
            color: #f39c12;
        }

        h2 {
            background: linear-gradient(45deg, #f39c12, #3498db, #2ecc71);
            color: transparent;
            -webkit-background-clip: text;
            margin-top: 20px;
        }

        img {
            margin-top: -20px;
            border-radius: 50%;
        }

        h3 {
            margin-left: 15px;
            margin-top: -10px;
        }

        .body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 600px;
            color: #2c3e50;
            background-image: url(gahm.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -2%;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        button {
            background-color: #3498db;
            width: 150px;
            min-height: 40px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            border: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2c3e50;
        }

        #footer {
            background: linear-gradient(45deg, #181414, #3498db, #181414);
            height: 200px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            margin-top: -23px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .left,
        .center,
        .right {
            width: 30%;
            text-align: center;
        }

        .left {
            margin-top: 20px;
        }

        .right img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 20px;
        }

        .sem {
            background-color: #3498db;
            height: 30px;
            width: 100%;
            margin-top: 20px;
            text-align: center;
            color: white;
        }

        .mysidebar {
            height: 100%;
            width: 0;
            background-color: #2c3e50;
            color: #818181;
            overflow-x: hidden;
            position: fixed;
            top: 0;
            left: 0;
            transition: 0.5s;
            z-index: 1;
            padding-top: 65px;
        }

        .mysidebar a {
            display: block;
            text-decoration: none;
            font-size: 25px;
            padding-top: 20px;
            margin-left: 25px;
            color: #818181;
            transition: color 0.3s ease;
        }

        .mysidebar a:hover {
            color: white;
        }

        #closebtn {
            position: absolute;
            top: -5%;
            right: 5%;
            font-size: 35px;
            color: red;
            cursor: pointer;
        }

        .fab:hover .fara li a {
            display: block;
        }

        .fab,
        .fara {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .fab span {
            color: #fff;
            cursor: pointer;
        }

        .fara li a {
            display: none;
            text-decoration: none;
            color: chocolate;
            transition: color 0.3s ease;
        }
        .fara li a:hover {
            color: #f39c12;
        }
        
        @media only screen and (max-width: 768px) {
    #navlink {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }

    #navlink ul {
        margin-top: 20px;
    }

    #navlink ul li {
        margin: 10px 0;
    }

    #navlink h2,
    #navlink img,
    #navlink h3 {
        margin: 0;
    }
}
    </style>
    <script>
        function openNav() {
            document.getElementById('sidebar').style.width = "250px";
        }

        function closeNav() {
            document.getElementById('sidebar').style.width = "0px";
        }
    </script>
</head>
<body>
<div id="navlink">
            <h2>Get Accomodation And Lodges Easly</h2>
            <img src="d.jpg" alt="" width="50px" height="50px"><h3>Easy Stay Access  Company</h3s>
            <ul>
              <!-- <li> <span onclick="openNav()"><i class="fa fa-bars"></i></a></span><a href="" -->
                <li><a href="loginpart.php">BOOKING</a></li>
                <li><a href="loginpart.php">LOGIN</a></li>
                <div class="fab"><li><a href="vist us.html" >CONTACT US</a></li></div>
                <li><a href="display houses.html">HOME</a></li>
                <li><a href="45dashboard.html">ADMIN</a></li>
            </ul>

        </div>
        <div class="mysidebar" id="sidebar">
            <a href="javascipt:void(0)" id="closebtn"  onclick="closeNav()">&times;</a>
            <a href="">INFORMATION</a>
            <a href="">ACCOUNTS</a>
            <a href="">BLOG</a>
            <a href="">HELP</a>
        </div>
       
        <div>
        
        </div>
        <div class="body"><center>
            <h2>Easy Stay Access Company ESACs</h2>
            <b>Nestled in the heart of Kigali, our exquisite lodges and accommodation offers a unique blend </b>
            <b>of modern comfort and urban convenience. With its stunning views of the vibrant  </b><br>
            <b>cityscape, this residence promises a lifestyle beyond compare.we are here as heart beat of kigali to </b>
            <b>serve best lodges and accommodations suitable for you which you will be able to access</b>
            <b>anywhere you are in Rwanda without comissioners and commissions and stress of strugling for those accommodation </b>
            <b>in fact we have all type of accommodetions suitable for your ability and in affordance of everyone<a href="">for more info click Here</a></b>
          <!-- <center><h3><a href="vist us.html"><button>Visit us For More</button></a></h3></center> --> </center>
        </div>
        <div class="fara">
            <li><a href="">Learn More</a></li>
            <li><a href="">Trending</a></li>
            <li><a href="">Admin </a></li>
            
        </div>
        <div id="footer">

<div class="left">
    <h3><b>GET IN TOUCH</b></h3>
    <b>phone +250788884407</b><br>
    <b>Location:KIGALI-GISOZI</b><br>
    <em> Email: stayesac@gmail.com</em><br>
    <i  class="fa fa-whatsapp">Whatsapp:+250788484407</i><br>
    
</div>
<div class="center">
    <h3><strong>VISIT OUR WEBSITE</strong></h3>
    <i class="fa fa-facebook">Facebook:Accomogate official</i><br>
    <i class="fa fa-instagram">Instragram:Easy Stay Access</i><br>
    <i class="fa fa-linkedin">Linkedin:Easy Stay Access</i><br>
   

    
</div>
<div class="right">
    <h3><b><strong>Easy Stay Access Company ESAC</strong></b></h3>
    <img src="d.jpg" alt="">
    
</div>
<div class="sem">
    <center> 2022-2023 copyright reserved@ act Services Ltd. All Rights Reserved. | ESAC.com Privacy Policy | Terms of Service</center>
</div>

        </div>
</body>
</html>