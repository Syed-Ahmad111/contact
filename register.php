<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    


<div class="login-box">
  <h2>Register Your Account</h2>
  <form method="POST">
    <div class="user-box">
      <input type="name"  name="name" required="">
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="email"  name="email" required="">
      <label>Email Address</label>
    </div>
    <div class="user-box">
    <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
    <input type="password" name="conpassword" required="">
      <label>Confirm Password</label>
    </div>
    <div class="user-box1">
    <input type="submit" name="btn">
      
    </div>
    <a href="login.php">Login</a>
  </form>
</div>
</body>
</html>
<?php
include('db.php');

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conpass = $_POST['conpassword'];


    if($pass != $conpass){
        echo "Password & confirm password not matched";
        exit();
    }

    $query = "SELECT * from users where email = '$email'";
    $queryRun = mysqli_query($con ,$query);

     
     if(mysqli_num_rows($queryRun) > 0){
        echo "User already registered";
     }
     else{
        $query = "INSERT into users (name , email ,password) values('$name' , '$email','".md5($pass)."')";
        $queryRun = mysqli_query($con , $query);
        if($queryRun){
            echo "User has been registered";
        }
     }
}

echo "<br><br>";

// $text = "Nisa123456";

// echo  $text;
// echo "<br>";
// echo md5($text);
// echo "<br>";
// echo sha1($text);

?>