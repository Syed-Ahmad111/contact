<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  height: 100%;
}
body{
  background:black;

}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: grey;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}
.user-box1 input{
    background:black;
    width:100%;
    color:#fff;
    padding:10px 0px;
    font-size:15px;
}
    </style>
</head>
<body>
    


<div class="login-box">
  <h2>Login</h2>
  <form method="POST">
    <div class="user-box">
      <input type="email"  name="email" required="">
      <label>Email Address</label>
    </div>
    <div class="user-box">
    <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box1">
    <input type="submit" name="btn_login">
      
    </div>
    <a href="register.php">Create a account</a>
  </form>
</div>
</body>
</html>

<?php
include('db.php');
session_start();
if(isset($_SESSION['name'])){
    header('location:welcome.php');
}
else{
    if(isset($_POST['btn_login'])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
    
        $query = "SELECT * from users where email = '$email' and password = '$pass'";
        $queryRun = mysqli_query($con,$query);
    
        echo mysqli_num_rows($queryRun);
        if(mysqli_num_rows($queryRun) > 0){
            $row = mysqli_fetch_assoc($queryRun);
            $_SESSION['name'] = $row['name']; 
            echo  "Login successfully";
            header("Location:welcome.php");
        }
        else{
            echo "<script>alert('invalid Email and pass')</script>";
        }
    
    
        // $row = mysqli_fetch_assoc($queryRun);
    
        // echo $row['name'];
        // echo $row['email'];
        
    }
}




?>


