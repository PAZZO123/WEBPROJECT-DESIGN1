<?php
include("connection.php");
include("session.php");

if (isset($_GET['id'])) {
    $articleID = $_GET['id'];

    $detailsQuery = "SELECT * FROM uploads WHERE articleID = '$articleID'"; 
    $detailsResult = $conn->query($detailsQuery);


    if ($detailsResult === false) {
        die("Error in SQL query: " . $conn->error);
    }

    if ($detailsResult->num_rows > 0){
        $detailsRow = $detailsResult->fetch_assoc();
        $location = $detailsRow['location'];
        
        $price = $detailsRow['price'];
        $description = $detailsRow['image_name'];
        $moreAboutContract = $detailsRow['phone_number'];
        $imagePath = $detailsRow['image'];
       
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            
        <style>
            body{
                top: 0;
                margin: 0;
            }
        #container{
            top: -2%;
        display: flex;
        flex-direction: column;
        background-color: aqua;
        width: 100vw;
        height: 100vh;

       } 
       .top{
        width: 100%;
        height: 10%;
        background-color: black;
        color: #ffcc00;
       }
       .bottom{
        width: 100%;
        height: 90%;
        display: flex;
        flex-direction: row;
       }
       .left{
        width: 30%;
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        color: #ffcc00;
       }
       .header{
    width: 100%;
    min-height:30vh;
    background-color: blue;
    padding: 10px;
       }
       .names{
        width: 100%;
        min-height:30vh;
        background-color:pink;
        padding: 10px;
        align-items: stretch;
       }
       .photo{

       }
       .right{
        width: 70%;
        height: 100%;
        background-color:black;
        color: white;
        display: flex;
        flex-flow: row wrap;
       }
       .form{
        width: 50%;
        background-color: blue;
        height:100%;
       }
       .inform{
        width:5  0%;
        background-color: aqua;
        height:100%;} 
        button{
            width: 150px;
            height: 40px;
            margin-left: 100px;
            color: black;
            background-color: #ffcc00;
        }
</style>
<script>
     function ViewClients() {
           window.location.href = <?php echo "<a href='Project.php?articleId=$articleid'>BOOK NOW</a>";?>;
            
        }
</script>
        </head>
        <body style="overflow:hidden">
            <div id="container">
                <div class="top">
                   <center><h2>ENJOY BOOKING HOTEL AND LEND HOUSE</h2></center>
                    <h2>Details for Article ID: <?php echo $articleID; ?></h2>
                </div>
                <div class="bottom">
                    <div class="left">
                        <p style="font-size: 25px;">
                            <strong>Location:</strong> <?php echo $location; ?><br>
                            
                            
                            <br>
                            <strong>Price:</strong> <?php echo $price; ?>
                            <br>
                            <strong>Description:</strong> <?php echo $description; ?>
                            <br>
                            <strong>More about contract:</strong> <?php echo $moreAboutContract; ?>
                        </p>
                        <a href='Project.php?articleID=<?php echo $articleID;?>'> <button type="submit" id="">  BOOK NOW</button></a>
                        
                      
                    </div>
                    <div class="right">
                        <?php
                     echo '<img src="' . $imagePath . '" alt="Your Image" width="700px" height="500px">';
                           ?> 
                    </div>
                </div>
            </div>
            
        </body>
        </html>

        <?php
    } else {
        echo 'Article not found.';
    }
} else {
    echo 'Invalid request.';
}
?>