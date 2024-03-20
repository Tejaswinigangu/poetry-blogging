<?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
     
            session_start();
            if (!isset($_SESSION['name'])) {
              header("Location: common.php"); // Redirect to login page if not logged in
             exit();
              $name = $_SESSION['name'];
                }
                $name = $_SESSION['name'];
            $conn->close();
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        
        .options {
            padding-left: 50px;
            font-size: 20px;
            padding-top: 50%;
        }
        
        .options a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }
        .content {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #e79aff;
            overflow-x: hidden;
        }
        
        .greeting {
            padding: 20px;
            font-size: 20px;
            color: white;
            background-color: #b148d2;
            text-align: center;
            height: 100px;
            padding-top: 50px;
            padding-bottom:50px;
        }
         .display{
             padding-left:210px;
           
           
         }
         .display img{
             height:600px;
            width:1050px;
            position:fixed;
         }
    </style>
</head>
<body>
    <div class="content">
        <div class="greeting">
           <h2>Welcome, <?php echo $name; ?>!</h2>
        </div>
        <div class="options">
            <a href="create.php">Create</a>
            <a href="post.php">Posts</a>
            <a href="join.php">Workshops</a>
            <a href="index.php">Log Out</a>
        </div>
    </div>
    <div class="display">
        <img src="https://static.wixstatic.com/media/ecc0a8_6fcf5736996e430eb44c360c2852b61c~mv2.png/v1/crop/x_0,y_0,w_1220,h_735/fill/w_560,h_340,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/tapestry%20of%20words.png" alt="no image">
    </div>

   
</body>
</html>
