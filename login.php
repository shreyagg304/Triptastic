<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="div">
    <div class="content text-center">
      <form action="" method="post">
        <h1 class="text-center ">Login</h1>
        <div class="username box">
          <input type="text" class="input" placeholder="username/email" name="username" id="user" required>
          <i class="fa-solid fa-user icon" id="userIcon"></i>
        </div>
        <div class="password box">
          <input type="password" class="input" placeholder="password" name="password" id="lock" required>
          <i class="fa-solid fa-lock icon" id="passIcon"></i>
        </div>
        <div class="extra">
          <input type="checkbox" id="remember"><label for="remember" name="remember">Remember me</label>
          <p class="forgot">Forgot password?</p>
        </div>
        <input type="submit" class="btn login-btn" value="Login" name="login">
        <p class="register">Don't have an account?<b><a href='signup.php'>Signup</a></b></p>
      </form>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['name'])){
    header("location: index.php");
    exit;
}

if(isset($_POST['login'])){
    include("config.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from users where username = '$username' 
    or email = '$username'";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['name'] = $username;
        header('location: index.php');
        exit; 
    }
    else{
        echo '<script>
                alert("Login failed. Invalid username or password !!");
                window.location.href = "login.php";
            </script>';
        exit;
    }
}
?>