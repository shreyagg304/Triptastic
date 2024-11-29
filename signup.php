<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="div">
    <div class="content text-center">
      <form action="" method="post">
        <h1 class="text-center ">Signup</h1>
        <div class="email box">
            <input type="email" class="input" placeholder="email" name="email" id="email" required>
          </div>
        <div class="username box">
          <input type="text" class="input" placeholder="username" name="username" id="user" required>
        </div>
        <div class="password box">
          <input type="password" class="input" placeholder="password" name="password" id="lock" required>
        </div>
        <div class="cpassword box">
            <input type="password" class="input" placeholder="retype password" name="cpassword" id="lock" required>
          </div>
        <div class="extra">
          <input type="checkbox" id="remember"><label for="remember" name="remember">Remember me</label>
        </div>
        <input type="submit" class="btn signup-btn" value="Signup" name="Signup">
      </form>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['name'])){
    header("location: home.php");
}
?>
<?php
    if(isset($_POST['Signup'])){
        include 'config.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $cpassword = $_POST['cpassword'];

        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 || $count_email==0){
            if($password == $cpassword){
                $sql = "insert into users (username, email, password) 
                values ('$username','$email','$password')";
                $result = mysqli_query($conn, $sql);
            }
            else{
                echo '<script>
                    alert("Passwords do not match!!!");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            echo '<script>
                    alert("User already exists!!!");
                    window.location.href = "login.php";
                </script>';
        }
    }
?>