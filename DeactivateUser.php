
<!DOCTYPE html>
<html>

<head>
    <title>Deactivate User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #ffcc00; 
			height: 300px;
            margin-bottom: -100px;
        }
        form {
    margin-left: 20px;
    margin-top: px;
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
    margin-top: -200px;
}
    </style>
</head>

<body>
   
    <nav>
        <div class="logo"></div>
        <table>
            <tr>
                <td>
                   

                </td>
                <td>

                    <span>ACCOMOGATE</span>
                </td>
            </tr>
        </table>
        </div>
    </nav>
    
    <table  class="menu" width="100%">
    <tr>
	   <td colspan="5" style="text-align:right; color:green;"> 
	   <button><a href="profile.php">Profile</a></button>
	   <br/>
	</tr>
  </table> 
	  <table border=0 height="80%" width="100%">
	    <tr><td><a href="Dashboard.php">Dashboard</a></td><td width="80%"rowspan="7" valign="top">
        
		   <h2><a href="users.php">  </a> Deactivate User </h2> 
		   <hr/> 
		   <?php
		   include "connection.php";
	        $id = $_GET['userId'];			
			 
		    $q = "SELECT * FROM house WHERE userID=".$id; 
		     
			$results = mysqli_query($conn,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($conn));
			}
            if($row = mysqli_fetch_array($results)){
				?>
			  <form action="" method="post" style="margin-left: 20px;"> 
              <table>
                <tr>
                    <td><label for="name">First Name:</label></td>
                <td><?php echo $row['Firstname'];?></td>
            </tr>
            <tr>
                    <td><label for="name"> Last Name:</label></td>
                <td><?php echo $row['lastname'];?></td>
            </tr>
                <tr>
                    <td><label for="Email">Email:</label></td>
                <td><?php echo $row['email'];?></td>
            </tr>
            <tr>
                    <td><label for="name">Location:</label></td>
                <td><?php echo $row['locations'];?></td>
            </tr>
                <tr>
                    <td><label for="Role">Role:</label></td>
                <td><?php echo $row['role'];?></td>
            </tr>
              </table>
				 <br/> 
				 <br/>
				 <input type="submit" value="Delete" name="up" style="margin-top: 20px;width: 170px;margin-left: 50px; text-align: center;font-size: 16px;color: #fafafa;background-color: #1E5C37;padding: 10px;text-transform: uppercase;display: block;font-weight: 600;border-radius: 15px;"/>  
			  </form> 
		    
		<?php
			}
          if(isset($_POST['up'])){	 
		    $q = "DELETE FROM house  WHERE userID=".$id; 
			//die($q);
			$results = mysqli_query($conn,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($conn));
			} 
			   echo '<meta http-equiv="refresh" content="0; url=users.php">';
			}  
		   ?> 
</body>

</html>
