<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
    background-image: url("images/vecteezy_minimalist-dark-gradient-wave-background-simple-design-for_7718309.jpg");
    margin: 0;
}

    .box{
        background-color:black;
        height:700px;
        width:400px;

    }
    .navbar {
  display: flex;
  justify-content: space-between;
  background-color:black;
  height: 80px;;
  align-items: center;
 padding-bottom: 20px;;
 padding-bottom: 20px;;
}

.navbar a {
  color: white;
  padding: 6px 12px; /* Reduced padding */
  text-decoration: none;
  text-align: center;
  border-radius: 6px;
  font-size: 14px; /* Optional: smaller font for a sleeker look */
}

.navbar a:hover {
  background-color: white;
  color: black;
}
h1{
    color:white;
}
.box1 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Full viewport height */
  
}
a{
  text-decoration: none;;
}

.box2 {
  height:500px;
  width:450px;
  background-color:black;
  
  text-align: center;
  border-radius: 10px;;
  box-shadow: inset;
}
 input{
            padding:7px;
            margin-bottom: 10px;;
            width:270px;
            border-radius: 5px;;
        }
         button{
            border-radius: 5px;
            padding-left: 15px;;
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 10px;;
        }
        h3{
            color:white;
        }
        .profile-section {
    /*background: url('images/vecteezy_minimalist-dark-gradient-wave-background-simple-design-for_7718309.jpg') no-repeat center center;*/
    background-size: cover;
    padding: 50px;
    text-align: center;
}

.profileimg img {
    border-radius: 50%;
    border: 3px solid white;
}
.profile{
    margin-top:50px;
}
p{
    color:white;
}

        </style>
</head>
<body>
    <div class="navbar">
        <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        <a href="index.php">HOME</a>
        <a href="books.php">BOOKS</a>
        <a href="feedback.php">FEEDBACK</a>
          <a href="student-login.php">PROFILE</a>
        <div class="profile-section">
        <div class="profileimg">
            <img src="images/user_11461114.png" width="40px"class="profile">
            <p>Welcome to your profile!</p>
        </div>
    </div>
        <a href="registration.php">LOGOUT</a>
    </div>
    <form action=""method="POST">
            <button  name="submit1">Edit Profile</button>
                     </form>
               <div class="wrapper">            
                <?php
           $q=mysqli_query($db,"SELECT * from student where username='$_SESSION[login_user]';");
           ?>
        </div>
    </div>
</body>
</html>