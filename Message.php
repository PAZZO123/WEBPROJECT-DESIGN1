<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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
            window.location.href = 'uploaded.php';
        }

        function Modified() {
            alert("No data yet inserted");
       
            
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
            <button onclick="Uploaded()" class="adm">Uploaded</button>
            <button onclick="Modified()" class="adm-tool">Modification</button>
            
            <button onclick="ViewClients()" class="adm-clients">Clients</button>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">Update</button>
            <button onclick="Logout()" class="adm-logout">Logout</button>
        
    <?php
    include("Connection.php");
        $q="SELECT * FROM comments_tb";
        $results=mysqli_query($conn,$q);echo "<table class=\"table\"'>
        <tr bgcolor='#C9C0BB'>
        <th>ID </th>
        <th>USERNAME</th>
        <th>SUBJECT </th>
        <th>COMMENT </th>
        <th>DATE </th>
        <th>LOCATION</th>
    
    
       
        <th colspan=3>ACTION </th>
        </tr>";
  while($r= mysqli_fetch_array($results)){
      echo "<tr><td>".$r['id']."</td><td>".$r['username']."</td><td>".$r['subject']."</td><td>".$r['comment']."</td><td>".$r['date']."</td><td>".$r['Location']."</td>";
  
      echo "
      <td><a href='Viewmess.php?userId=$r[id]'> <button>View</button></a></td>
      <td><a href='?userId=$r[id]'> <button>Reply</button> </a></td>
    
</tr>";}
    ?>
    
    
</body>
</html>