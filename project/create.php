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
            background-color:#f3ccff;
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
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color:;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding-left: 100px;
            width:100%;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 200px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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


    <div class="container">
        <h1>Create Your Post</h1>
        <form action="#" method="post">
            <input type="text" name="title" id="title" placeholder="Title">
            <input type="text" name="author" id="author"placeholder="Author">
            <input type="text" name="pen_name" id="pen_name" placeholder="Pen Name">
            <input type="text" name="inspiration" id="inspiration" placeholder="Inspiration">
            <textarea name="description" placeholder="Fill  with thoughts......"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>


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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $pen_name = $_POST['pen_name'];
    $inspiration = $_POST['inspiration'];
    $description = $_POST['description'];

    if (empty($title) || empty($author) || empty($pen_name) || empty($inspiration) || empty($description)) {
        echo "Please fill in all fields.";
    } else {
        $stmt = $conn->prepare("INSERT INTO poem (Title, Author, Pen_Name, Inspiration, poem) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $author, $pen_name, $inspiration, $description);

        if ($stmt->execute()) {
            echo "Data inserted successfully";
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();

?>





