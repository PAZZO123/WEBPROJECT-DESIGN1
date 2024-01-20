<?php
    include 'session.php';
    include('Connection.php');if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Filename = $_POST['name'];
        $Price = $_POST['price'];
        $Location = $_POST['location'];
        $Phone = $_POST['number'];
        $Description = $_POST['description'];
        $Type=$_POST['type'];
    $error=" ";
        
        if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            $File = $_FILES['file']['name'];
            $File_temp = $_FILES['file']['tmp_name'];
    
        
            $upload_directory = 'pictures/';
            move_uploaded_file($File_temp, $upload_directory . $File);
            $query=mysqli_query($conn,"SELECT* FROM uploads WHERE image_name='$Filename'");
            $r=mysqli_fetch_row($query);
            if($r==0)
            {
            $sql = "INSERT INTO UPLOADS (image, image_name, price, location, phone_number,Description,Type) VALUES ('$File', '$Filename', '$Price', '$Location', '$Phone','$Description','$Type')";
            $connect = mysqli_query($conn, $sql);
    
            if ($connect) {
                $error="Data inserted";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $error= "Error uploading file.";
        }
    }
    else
    {
        $error="You Alread have account!.please login";
    }
    }
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
       body{
        height: 650px;
       }
        h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 32px;
        }

        input {
            padding: 15px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin: 3%;
            border-radius: 3px;
            text-indent: 0dvh;
        }

        form {
            margin-top: 7%;
            width: 27%;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            border: 2px solid #ffcc00;
            border-radius: 3px;
        }

        #upl {
            background-color: #ffcc00;
            border-radius: 3px;
            border: none;
            padding: 15px;
            width: 92%;
            margin-left: auto;
            margin-right: auto;
            margin: 3%;
        }

        .adm,
        .adm-tool,
        .adm-delete,
        .adm-clients,
        .adm-publish,
        .adm-update,
        .adm-logout {
            position: absolute;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            border: none;
            font-size: 20px;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            background-color: #ffcc00;
        }

        .adm {
            top: 8%;
            left: 70%;
        }

        .adm-tool {
            top: 8%;
            left: 80%;
        }

        .adm-delete {
            top: 8%;
            left: 90%;
        }

        .adm-clients {
            top: 18%;
            left: 70%;
        }

        .adm-publish {
            top: 18%;
            left: 80%;
        }

        .adm-update {
            top: 18%;
            left: 90%;
        }

        .adm-logout {
            top: 28%;
            left: 80%;
            background-color: red;
            color: white;
        }

        button:hover,
        .adm-delete:hover,
        .adm-clients:hover,
        .adm-publish:hover,
        .adm-update:hover,
        .adm-logout:hover {
            background-color: rgb(23, 240, 23);
        }
    </style>
    <script>
        function Uploaded() {
            window.location.href = 'uploaded.php';
        }

        function Modified() {
            alert("No data yet inserted");
        }

        function Message() {
            window.location.href = 'Messages.php';
            
        }

        function ViewClients() {
            window.location.href = 'client.php';
            
        }

        function Publish() {
            alert("Published");
            
        }

        function Update() {
            alert("Updated");
           
        }

        function Logout() {
            window.location.href = 'WEBDESIGN.php';
           
        }
    </script>
</head>
<body>
    <div class="photo-upload">
        <div class="header">
            <h2>Admin Portal</h2>
            <h2>Hi <?php echo $login_session;?>! Welcome</h2>
            <button onclick="Uploaded()" class="adm">Uploaded</button>
            <button onclick="Modified()" class="adm-tool">Modification</button>
            <button onclick="Message()" class="adm-delete">Message</button>
            <button onclick="ViewClients()" class="adm-clients">Clients</button>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">Update</button>
            <button onclick="Logout()" class="adm-logout">Logout</button>
        </div>
        <p></p>
        <form action="" method="post"enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="text" name="name" placeholder="Image name">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="description" id="" placeholder="description">
            <input type="text" name="location" placeholder="Location">
            <input type="tel" name="number" placeholder="Phone number">
            <input type="text" name="type" id="" placeholder=" type of description">
            <input id="upl" type="submit" value="Upload">
        </form>
    </div>
   
    
</body>
</html>