<!DOCTYPE html>
<html>
    <head>
        <title>ACCOMOGATE</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
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
            background: #fff;
            box-shadow: 0 0 50px #0ef;
            border-radius: 20px;
            padding: 40px;
            color: #0ef;
        }
        select input{
            color: #000;
        }
        .wallaper:hover{
            animation: animate 1s linear infinite;
        }
       /* @keyframes animate {
                  100%{
                    filter:hue-rotate(360deg);
                  }
        }*/
        .ghome{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        strong{
            color:blue;
            font-size: 30px;
            align-items: center;

        }
        .input input{
            position: relative;
            margin:10px 0;
            border: 2px solid #000;
            background-color: transparent;
            border-radius: 10px;
            height: 20px;
            color: black;
        }
        button {
            position: relative;
            width: 100%;
            height: 35px;
            background: #0ef;
            box-shadow: 0 0 10px #0ef;
            font-size: 16px;
            color: #000;
            font-weight: 500;
            border-radius: 30px;
            cursor: pointer;
            border: none;
            margin-top: 10px;
            outline: none;
            
        }
        select{
            background-color: transparent;
            color: blue;
            height: 25px;
        }
        a{
            color: blue;
        }
        </style>
        
    <<script>
        function togglePassword() {
            var passwordInput = document.getElementById("psw");
            var passwordVisibilityCheckbox = document.getElementById("show-password");

            if (passwordVisibilityCheckbox.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
        function validatePassword() {
            var password = document.getElementById("psw").value;
            var passwordStrength = document.getElementById("password-strength");
            var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;

            if (passwordRegex.test(password)) {
                passwordStrength.innerHTML = "Strong Password";
                passwordStrength.style.color = "green";
                return true;
            } else {
                passwordStrength.innerHTML = "Password must contain at least 8 characters with one uppercase, one lowercase, one number, and one symbol.";
                passwordStrength.style.color = "red";
                return false;
            }
        }

        function validateForm() {
            var password = document.getElementById("psw").value;
            var confirmPassword = document.getElementById("cpsw").value;

        
            if (password !== confirmPassword) {
                alert("Error: Password and confirm password do not match.");
                return false;
            }


            if (!validatePassword()) {
                alert("Error: Password does not meet the requirements.");
                return false;
            }

            return true;
        }
    </script>

    </head>
    <body>
        <div class="wallaper">
            <div class="ghome">
       <form action="" method="POST" onsubmit="return validateForm()" >
        <center><strong>SIGN UP</strong></center>
        <div class="input">
        <input type="text" placeholder="Firstname" name="fname" id="fname" required><br>
        <input type="text" placeholder="Lastname" name="lname" id="lname" required><br>
        <select name="country_code" id="country_code"><option value="250">+250</option>
                              <option value="+196">+196</option>
                               <option value="+119">+119</option>
                                <option value="+244">+244</option>
                            
        </select><input type="text" name="num" placeholder="phone number" id="nbr" required><br>
        <input type="email" placeholder="Email" name="email" id="emil" required><br>
       <input type="text" placeholder="enter your location" name="slct" required><br>
                              
                              <input type="password" placeholder="password" name="psw" id="psw" oninput="validatePassword()" required>
                              <div id="password-strength"></div> 
                              <input type="password" placeholder="confirm password" name="cpsw" id="cpsw" required>
                              <input type="checkbox" id="show-password" onclick="togglePassword()">
                             <label for="show-password">Show Password</label>
                            </div>
                              <input type="radio"  name="gender" value="MALE" id="male">Male
                              <input type="radio" name="gender" value="FEMALE" id="fml">Female <br>
                            <input type="checkbox" name="chck" id="chck" required>i accep all condition<br>
                           <button type="submit">REGISTER</button>  <br>
                          <p> If registered<a href="loginpart.php">LOGIN</a></p>
                        </div>
                        </div>

       </form>
       <?php
include('Connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $FirstName = $_POST['fname'];
    $SecondName = $_POST['lname'];
    $Email = $_POST['email'];
    $number = $_POST['num'];
    $select = $_POST['slct'];
    $Password = $_POST['psw'];
    $Cpassword = $_POST['cpsw'];

    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $countryCode = $_POST['country_code'];

    if ($Password != $Cpassword) {
        echo "Error: Password and confirm password do not match.";
    } else {
        if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/', $Password)) {
            $sql = "INSERT INTO HOUSE (Firstname, lastname, email, psw, passwordconfirm, locations, phone, gender, country_code) 
                    VALUES ('$FirstName', '$SecondName', '$Email', '$Password', '$Cpassword', '$select', '$number', '$gender', '$countryCode')";

            $connect = mysqli_query($conn, $sql);

            if ($connect) {
                
                exit();
            } else {
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        } else {
            echo ".";
        }
    }
}
$conn->close();
?>

    </body>
</html>