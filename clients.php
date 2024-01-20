<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents Portal</title>
    <style>
       
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
            border: 2px solid green;
            border-radius: 3px;
        }

        #upl {
            background-color: green;
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
        .table{
            border-collapse: collapse;
            margin-top:140px;
            width: 100%;
        }
        .table th,.table td{
            border: 1px solid gray;
            padding: 8px;
            text-align: left;
        }
        .table tbody tr:nth-child(even){
            background-color:lightgrey;
        }
    </style>
    <script>
        function Uploaded() {
            window.location.href = 'uploadeds.php';
        }

       

        function Message() {
            window.location.href = 'Message.php';
            
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
            <h2>Agents Portal</h2>
            <button onclick="Uploaded()" class="adm">Uploaded</button>
            <button onclick="Modified()" class="adm-tool">Modification</button>
            <button onclick="Message()" class="adm-delete">Message</button>
            
            <button onclick="Logout()" class="adm-logout">Logout</button>
        </div>
    </div>
    <?php
    include("Connection.php");
        $q="SELECT * FROM house WHERE role='user'";
        $results=mysqli_query($conn,$q);echo "<table border=1 class=\"table\" width='100%''>
        <tr bgcolor='#C9C0BB'>
        <th>Location </th>
        <th>FNAME </th>
        <th>LNAME </th>
        <th>EMAIL </th>
        <th>PHONE </th>
        <th>ROLE </th>
        <th>GENDER </th>
       
        <th colspan=3>ACTION </th>
        </tr>";
  while($r= mysqli_fetch_array($results)){
      echo "<tr><td>".$r['locations']."</td><td>".$r['Firstname']."</td><td>".$r['lastname']."</td><td>".$r['email']."</td><td>".$r['phone']."</td><td>".$r['role']."</td><td>".$r['gender']."</td>";
  
      echo "
      <td><a href='ViewUser.php?userId=$r[userID]'> <button>View</button></a></td>
     
</tr>";}
    ?>
    
</body>
</html>