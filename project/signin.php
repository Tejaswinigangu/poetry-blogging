<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {

            
            background-color: #ffd9e6;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signin-form {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .signin-form h2 {
            margin-bottom: 20px;
        }
        .signin-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .signin-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .signin-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="signin-form">
        <h2>Sign In</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="text" name="penname" placeholder="Pen Name"><br>
            <input type="submit" value="Submit">
            <p>Already have an account. <a href="file.php">Login</a></p>
        </form>
    </div>
</body>
</html>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    $name = $_POST['name'];
    $email = $_POST['email'];
     $password = $_POST['password'];
    $penname = $_POST['penname'];
   
    // Basic validation (you should enhance this)
    if (empty($name) || empty($email) || empty($penname) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement to insert data into users table
        $sql = "INSERT INTO signin (name, email, penname, password) VALUES ('$name', '$email', '$penname', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Redirect user to common page after successful sign-up
            header("Location: common.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
}
?>