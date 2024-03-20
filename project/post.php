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



            // Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Title, Author, Pen_Name, Inspiration, poem FROM poem";
$result = $connect->query($sql);
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
            background-color:#b148d2;
            text-align: center;
            height: 100px;
            padding-top: 50px;
            padding-bottom:50px;
        }
        .see{
            float: right;
            width:1050px;
            padding-left:220px;
        }
        .see table {
            width: 100%;
            border-collapse: collapse;
           
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #e79aff;
        }
        .see{
            paddong-left:30px;
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

    <h2>Posts</h2>
    <div class="see">
        <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Pen Name</th>
            <th>Inspiration</th>
            <th>Poem</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Title"] . "</td>";
                echo "<td>" . $row["Author"] . "</td>";
                echo "<td>" . $row["Pen_Name"] . "</td>";
                echo "<td>" . $row["Inspiration"] . "</td>";
                echo "<td>" . $row["poem"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No posts found</td></tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>


