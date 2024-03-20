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
    <title>create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: left 50px;
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
            background-color:#e79aff;
            overflow-x: hidden;
        }
        
        .greeting {
            padding: 20px;
            font-size: 20px;
            color: white;
            background-color:#b148d2;
            text-align: center;
            height: 100px;
            padding-top: 50px;
            padding-bottom:50px;
            
        }
        .history {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 auto;
            max-width: 1000px;
            background-color:#fbeeff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            gap: 50px; /* Add gap between images */
            padding-left:200px;
        }

        .history-item {
            text-align: center;
            width: 150px; /* Set width equal to image width */
            gap:200px;
             margin-bottom: 10px; 
             margin-top:5px;
            
        }

        .history img {
            width: 150px;
            height: 150px;
            object-fit: cover;
       
            
        }

        .history p {
            margin-top: 10px;
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

    <div class="history">
        <div class="history-item">
            <a href="https://www.coursera.org/learn/poetry-workshop" class="course-link">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/d2/54cc3088bc11e588558b26396cd2c9/Kearney_Course_Logo_square.jpg?auto=format%2Ccompress%2C%20enhance&dpr=2&w=265&h=216&fit=crop&q=50" alt="Course 1">
            </a>
            <p>Sharpened Visions: A Poetry Workshop</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/mythology" class="course-link">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera/topics/mythology/large-icon.png?auto=format%2Ccompress%2C%20enhance&dpr=2&w=265&h=216&fit=crop&q=50" alt="Course 2">
            </a>
            <p>Plagues, Witches, and War: The Worlds of Historical Fiction</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/old-norse-mythology-sources" class="course-link">
                <img src="https://simplyhomeschool.com.au/static/simplyhomeschool/products/s/sh-onc-018_1686030372069.jpg" alt="Course 3">
            </a>
            <p>Songwriting: Writing the Lyrics</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/historical-fiction" class="course-link">
                <img src="a.jpeg" alt="Course 3">
            </a>
            <p>Make Your own Book</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/historical-fiction" class="course-link">
                <img src="b.jpeg" alt="Course 3">
            </a>
            <p>World of Poetry</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/hebrew-poetry" class="course-link">
                <img src="c.jpeg" alt="Course 3">
            </a>
            <p>Welcome:To your own Thoughts</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/hebrew-poetry" class="course-link">
                <img src="e.jpg" alt="Course 1">
            </a>
            <p>Our Mind Power</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/hebrew-poetry" alt="Course 2">
                <img src="alvaro-serrano-hjwKMkehBco-unsplash.jpg" alt="Course 3">
            </a>
            <p>Lets Meet The End</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/hebrew-poetry" class="course-link">
                <img src="d.jpg" alt="Course 3">
            </a>
            <p>Where world Begin's</p>
        </div>
        <div class="history-item">
            <a href="https://www.coursera.org/learn/old-norse-mythology-sources" class="course-link">
                <img src="h.jpeg" alt="Course 3">
            </a>
            <p>Where Worls End's</p>
        </div>
    </div>
</body>
</html>


