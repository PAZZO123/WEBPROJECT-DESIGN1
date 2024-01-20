<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>ACCOMOGATE</title>
        <style>
             body {
            margin: 0;
            padding: 0;
            
        }
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
                 position: fixed;
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
    h2{background:linear-gradient(45deg,yellow, skyblue,rgb(255, 213, 0)) ;
        color: transparent;
        -webkit-background-clip: text;
        margin-top: 20px;
    }
    img{
        margin-top: -20px;
        border-radius: 100%;
    }
    h3{
        margin-left: 55px;
        margin-top: -40px;
    }
    .body{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 600px;
        color: white;
        background-image: url(gahm.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
       padding-top:100px;
    background-position: center;
    display: flex;
    z-index: 1000;
    
    flex-direction: column;
    
        
    }
    center{
        margin-top: 300px;
        background-color: transparent;
    }
    button{
        background-color: transparent;
        width: 150px;
        min-height: 40px;
        border-radius: 10px;
        color: white;
    }
    #footer{
        background:linear-gradient(45deg, #181414, #3498db, #181414);
        height: 200px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        margin-top: -23px;
        flex-wrap: wrap;
    }
    .footer{
        display:inline-block;
        justify-content: center;
        align-items: center;
        
    }
    .left{
         float: left;
         width: 30%;
         height: auto;
         align-items: center;
         margin-top:37px ;
         margin-left: 20px;
    }
    .right{
        float: right;
        width: 30%;
        height: auto;
        margin-top: -40px;
    }

#footer center{
    color: white;
     margin-top: 150px;
}
#navlink h2, #navlink img {
    margin-left: 15px;
}

#navlink h2 {
    margin-left: -400px; 
    margin-top: 70px;

}

.mysidebar{
            float: right;
            height: 100%;
            width: 0;
            background-color: #181414;
            color: #818181;
            overflow-x:hidden ;
            position: fixed;
            top: 0;
            left: 0;
            transition: 0.5s;
            z-index: 1;
            padding-top: 65px; 
            
         
        }
         .mysidebar a{
            display:block;
            text-decoration: none;
            font-size: 25px;
            padding-top: 65px;
            margin-left: 25px;
            color: #818181;


        }
     .mysidebar a:hover{
        color: #fff;
     }
     #closebtn{
        position: absolute;
        top: -5%;
        right: 5%;
        font-size: 35px;
        color: red;
     }
     span{
        color: #fff;
     }
     .fara{
        display: none;
        background-color: #818181;
        font-size: x-large;
        color:chocolate;
     }
     .fab:hover .fara li a{
        display: block;
     }
    .sem{
        background-color: cadetblue;
        height: 30px;
        margin-top: -70px;
    }
    .body center{
         margin: 20px;
    }
   #navlink h2,img{
     margin-left:px ;
   }
   #navlink h2{
    margin: left -30px;
   }
   .right img{
    width: 100px;
        max-height: 80px}
        div ul li a:hover {
            color: #f39c12;
        }
       </style>

  <script>
    function openNav()
    {
        document.getElementById('sidebar').style.width="250px";
    }
    function closeNav()
    {
    document.getElementById('sidebar').style.width="0px";
    }
    
</script>
    </head>
    <body>
        <div id="navlink">
           <!-- <h2>Get Accomodation And Lodges Easly</h2>-->
            <img src="d.jpg" alt="" width="50px" height="50px"><h2>Easy Stay Access  Company</h2>
            <ul>
              <!-- <li> <span onclick="openNav()"><i class="fa fa-bars"></i></a></span><a href="" -->
                <li><a href="loginastenant.php">BOOKING</a></li>
                <li><a href="loginpart.php">LOGIN</a></li>
                <div class="fab"><li><a href="vist us.html" >CONTACT US</a></li></div>
                <li><a href="display houses.php">HOME</a></li>
                
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
        <div class="typing-text" id="typing-text">
            <h2>Easy Stay Access Company ESAC</h2>
            <b>Nestled in the heart of Kigali, our exquisite lodges and accommodation offers a unique blend </b>
            <b>of modern comfort and urban convenience. With its stunning views of the vibrant  </b><br>
            <b>cityscape, this residence promises a lifestyle beyond compare.we are here as heart beat of kigali to </b>
            <b>serve best lodges and accommodations suitable for you which you will be able to access</b>
            <b>anywhere you are in Rwanda without comissioners and commissions and stress of strugling for those accommodation </b>
            <b>in fact we have all type of accommodetions suitable for your ability and in affordance of everyone</div>
            <a href="">for more info click Here</a></b>
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
</html