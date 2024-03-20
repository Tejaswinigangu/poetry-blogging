<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #ffdab9; /* Light peach background color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .signin-form {
            background-color: rgba(255, 255, 255, 0.8);
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
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="text" name="penname" placeholder="Pen Name"><br>
            <input type="submit" value="Login">
            <p>Not having an account. <a href="signin.php">Signin</a></p>
        </form>
    </div>
</body>
</html>



<?php
session_start();
$user = "root";
$pwd = "";
$db = "project";
$con = mysqli_connect("localhost", $user, $pwd, $db) or die(mysql_error());

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($password)) {
        $query = "SELECT * FROM signin WHERE name ='$name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    $_SESSION['name'] = $user_data['name'];
                    header("Location: common.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
}

?>
