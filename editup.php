<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #ffcc00; 
			height: 700px;
        }

        nav {
            background-color: #101010; 
            color: #ffcc00;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
			height: 70px;
        }

        nav table {
            display: flex;
            align-items: center;
        }

        nav table td {
            padding-right: 10px;
        }

        nav img {
            border-radius: 50%;
        }

        table {
            border: 0;
            height: 80%;
            width: 100%;
        }

        td a {
            color: #ffcc00;
            text-decoration: none;
            padding: 10px;
			background-color: #1E5C37;
            border-radius: 5px;
        }

        td a:hover {
            background-color: #1E5C37;
            border-radius: 5px;
        }

        h2 {
            margin-left: 20px;
            color: #101010;
            margin-top: -0px; 
        }

        form {
            margin-left: 20px;
        }

        input {
            padding: 10px;
            width: 80%;
            margin-bottom: 15px;
            border: 1px solid #101010; 
            border-radius: 3px;
            box-sizing: border-box;
            color: #ffcc00;
            background-color: #ffffff; 
        }
        input[type="submit"] {
            margin-top: 20px;
            width: 170px;
            margin-left: 50px;
            text-align: center;
            font-size: 16px;
            color: #101010; 
            background-color: #1E5C37;
            padding: 10px;
            text-transform: uppercase;
            display: block;
            font-weight: 600;
            border-radius: 15px;
        }input[type="image"] {
    border: none;
	width: 100px;
	height: 100px;
}
h2{
	color: #ffcc00;
}
    </style>
</head>

<body>

    <nav>
        <div class="logo"></div>
        <table>
            <tr>
              
                <td>
                    <span>ACCOMOGATE</span>
                </td>
            </tr>
        </table>
    </nav>

    <table border=0 height="80%" width="100%">
        <tr>
            <td><a href="Dashboard.php">Dashboard</a></td>
            <td width="80%" rowspan="7" valign="top">

                <h2><a href="users.php">  </a> Edit Upload </h2>
                <hr />
                <?php
                include("connection.php");

                if (isset($_GET['userId'])) {
                    $id = $_GET['userId'];

                    
                    $id = mysqli_real_escape_string($conn, $id);

                    $q = "SELECT * FROM uploads WHERE articleID=" . $id;

                    $results = mysqli_query($conn, $q);

                    if (!$results) {
                        die("Something went wrong." . mysqli_error($conn));
                    }
                    if ($row = mysqli_fetch_array($results)) {
                ?>
                        <form action="" method="post">
                            <input type="hidden" name="Name" value="<?php echo $row['image']; ?>" />
                            <input type="image" src="<?php echo $row['image']; ?>" alt="Image" width="40" height="40" /> <br /><br />
                           
                            <input type="text" name="Gender" value="<?php echo $row['image_name']; ?>" placeholder="Enter your Gender" size="40" /> <br /> <br />
                            <input type="text" name="Gende" value="<?php echo $row['Description']; ?>" placeholder="description" size="40" /> <br /> <br />
                            <input type="text" name="Email" value="<?php echo $row['price']; ?>" placeholder="Enter your Email" size="40" /> <br />

                            <input type="text" name="Location" value="<?php echo $row['location']; ?>" placeholder="Enter your location" size="40" /> <br /><br />
                            <input type="text" name="Phone" value="<?php echo $row['phone_number']; ?>" placeholder="Enter your Phone" size="40" /> <br /><br />
                            <input type="text" name="Gendr" value="<?php echo $row['Type']; ?>" placeholder="Enter type" size="40" /> <br /> <br />
                            <br />
                            <input type="submit" value="Update" name="up" />
                        </form>
                <?php
                    }
                }
                if (isset($_POST['up'])) {
                    $name = $_POST['Name'];
                    $Gender = $_POST['Gender'];
                    $Email = $_POST['Email'];

                    $Location = $_POST['Location'];
                    $Phone = $_POST['Phone'];
                    $Description = $_POST['Gende'];
                    $Type = $_POST['Gendr'];

                    $q = "UPDATE uploads SET   image ='$name',  image_name='$Gender', price='$Email', location ='$Location',phone_number ='$Phone' , Description='$Description',Type='$Type' WHERE articleID=" . $id;
                    $results = mysqli_query($conn, $q);
                    echo "";
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>
