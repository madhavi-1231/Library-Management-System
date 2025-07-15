<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="stylesheet"href="style.css">
    <style>
        input{
            padding:7px;
            margin-bottom: 5px;;
            width:270px;
            border-radius: 5px;;
        }
        a{
            color:white;
        }
        button{
            padding:10px,10px;
        }
        .box{
            width:400px;
            height:400px;
        }
    </style>
</head>
<body>
    
    <div class="navbar">
    <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    <a href="index.php">HOME</a>
   <a href="books.php">BOOKS</a>
      <a href="feedback.php">FEEDBACK</a>
   <a href="student-login.php">LOGIN</a>
   <a href="logout.php">LOGOUT</a>
   <a href="registration.php">SIGNUP</a>
  </div>
  <div class="center-box">
    <div class="box">
        <h1>Library Management System</h1>
        <h3 style="color:white">User Login Form</h3>
        <form method="post" action="">
        <input type="text" name="username"placeholder="enter the username"><br>
        <input type="password" name="password"placeholder="enter the password"><br>
        <input type="submit" name="submit" value="LOGIN" style="width:70px;height:26px;">
        <div class="forgot">
           <a href="forgot.php">forgotpassword?</a>
           <a  href="registration.php">if New to the Website?SignUP?</a>
        </div>
         </form>
    </div>
    </div>
     <?php
     if(isset($_POST['submit'])){
        $count=0;
        $res=mysqli_query($db,"SELECT * from `student` WHERE username='$_POST[username]' && Password='$_POST[password]';");
        $count=mysqli_num_rows($res);
        if($count==0){
            ?>
            <script>
                alert("username and password does not match");
                </script>
        <?php
        }
        else{
            ?>
            <script>
            alert('You are successfully logged in');
                    window.location.href = 'profile.php';

            </script>
            <?php
        }
     }

?>  



     
</body>
</html>