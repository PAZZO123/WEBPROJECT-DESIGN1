
<!DOCTYPE html>
<html>

<head>
    <title>View User</title>
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
            margin-top: -200px;
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
        
		   <h2><a href="users.php"> </a> View Messages </h2> 
		   <hr/> 
		   <?php
		   include "connection.php";
	        $id = $_GET['userId'];			
			 
		    $q = "SELECT * FROM comments_tb WHERE id=".$id; 
		     
			$results = mysqli_query($conn,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($con));
			}
            if($row = mysqli_fetch_array($results)){
				?>
			  <form action="" method="post" style="margin-left: 20px;"> 
              <table>
                <tr>
                    <td><label for="id">ID:</label></td>
                <td><?php echo $row['id'];?></td>
            </tr>
            <tr>
                    <td><label for="username">user Name:</label></td>
                <td><?php echo $row['username'];?></td>
            </tr>
                <tr>
                    <td><label for="subject">Subject:</label></td>
                <td><?php echo $row['subject'];?></td>
            </tr>
                <tr>
                    <td><label for="comm">Feedback:</label></td>
                <td><?php echo $row['comment'];?></td>
            </tr>
            <tr>
                    <td><label for="LOCATION">Date:</label></td>
                <td><?php echo $row['date'];?></td>
            </tr>
           
              </table>
			  </form> 
		    
		<?php
            }  
		   ?> 
		
	    

</html>
