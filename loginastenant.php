<!DOCTYPE html>
<html>
    <head>
        <title>ACCOMOGATE</title>
        <style>
          /*  .{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }*/
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .wallaper{
            width: 400px;
            height: 500px;
            position: relative;
            background: white;
            box-shadow: 0 0 50px #0ef;
            border-radius: 20px;
            padding: 40px;
            color: black;
        }
        .wallaper:hover{
            animation: animate 1s linear infinite;
        }
        @keyframes  {
                  100%{
                    filter:hue-rotate(360deg);
                  }
        }
        .ghome{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        strong{
            color: blue;
            font-size: 30px;
            align-items: center;

        }
        .input input{
            position: relative;
            margin:10px 0;
            border: 2px solid black;
            background-color: transparent;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            box-shadow: none;
            height: 20px;
            color: black;
            width: 90%;
        }
        button {
            position: relative;
            width: 100%;
            height: 35px;
            background: #0ef;
            box-shadow: 0 0 10px #0ef;
            font-size: 16px;
            color: blue;
            font-weight: 500;
            border-radius: 30px;
            cursor: pointer;
            border: none;
            margin-top: 10px;
            outline: none;
            
        }
        ::placeholder{
            background-color: transparent;
            color: black;
            height: 25px;
        }
        a{
            color: blue;
        }
        </style>

    </head>
    <body>
        <div class="wallaper">
            <div class="ghome">
       <form action="" method="POST">
        <center><strong>LOGIN </strong></center>
        <div class="input">
        
                            
        <input type="email" placeholder="enter your Email" name="emails" id="nbr" required><br>
        
       
                              <input type="password" placeholder="penter yor pasword" name="psws" id="psw" required>
                            </div>
                              
                            <input type="checkbox" name="chck" id="chck" required>remember me<br>
                          <a href="Dashboard.html"> <button type="submit" value="">LOGIN</button></a> <br>
                          <p>Forget password <a href=""> Reset</a></p>
                          <p> Don't you have an account<a href="sign-up.php">sign up</a></p>
                        </div>
                        </div>

       </form>
       <?php
       include('Connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Reemail=$_POST['emails'];
        $Repassword=$_POST['psws'];

        $sql=" select * from HOUSE where email='$Reemail' and psw='$Repassword' ";
        $connect=mysqli_query($conn,$sql);

        if(mysqli_num_rows($connect)>0)
        {
            $row=mysqli_fetch_assoc($connect);
            $FirstName=$row['Firstname'];
            $secondName=$row['lastname'];

            header("Location: form.html
            ");
            exit();
        }
        else {
            echo "please register";
        }
    }
    $conn->close();
    ?>
    </body>
</html>
