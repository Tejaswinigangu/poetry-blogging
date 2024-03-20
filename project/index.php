<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Beautiful Page</title>
  <style>
    
    body, html {
      margin: 0;
      padding: 0;
    }

    .navbar {
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000; 
      height: 65px;
    }
    
    .navbar a {
      color: white;
      text-decoration: none;
      padding: 14px 16px;
    }
    
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
   
    body {
      background-image: url('alvaro-serrano-hjwKMkehBco-unsplash.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin-top: 65px; 
    }
 
    .centered-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }

    
    .img-overlay {
      background-color: rgba(0, 0, 0, 0.5); 
      color: white;
      padding: 40px; 
      border-radius: 10px;
      font-size: 24px; 
    }

    
    .navbar img {
      height: 50px;
      margin: 0 20px; 
    }

   
    .navbar div:last-child {
      margin-right: 20px; 
    }

  </style>
</head>
<body>

<div class="navbar">
  <div>
    <img src="Screenshot 2024-03-18 105319.png" alt="Website Logo">
  </div>
  <div>
    <a href="index.php">Home</a>
    <a href="signin.php">Register</a>
    <a href="login.php">Login</a>
  </div>
</div>

<div class="centered-content">
  <div class="img-overlay">
    <h1>Welcome to The</h1>
    <h1>"Echoes Of The Soul"</h1>
    <p>-Create your own poetry book.</p>
  </div>
  <div class="new">
    <!-- <a href="view.php">View Posts</a> -->
    <a href="view.php">
         <input type="button" value="View Posts" class="space login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;border-radius: 12px;background-color:#454545 ;color:white">
     </a>

  </div>
</div>
</body>
</html>