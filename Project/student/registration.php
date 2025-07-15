<?php include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <style>
      body{
        background-color:blue;
        margin:0;
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

    </style>
</head>
<body>
    <div class="navbar">
        <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        <a href="index.php">HOME</a>
        <a href="books.php">BOOKS</a>
        <a href="feedback.php">FEEDBACK</a>
        <a href="student-login.php">LOGIN</a>
        <a href="registration.php">SIGN UP</a>
    </div>

    <div class="box1">
        <div class="box2">
            <h1>Library Management System</h1>
            <h3>User Registration Form</h3>
            <form method="POST">
                <input type="text" name="first" placeholder="First Name" required><br>
                <input type="text" name="last" placeholder="Last Name" required><br>
                <input type="text" name="user" placeholder="Username" required><br>
                <input type="password" name="pass" placeholder="Password" required><br>
                <input type="number" name="roll" placeholder="Roll No" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="tel" name="phone" placeholder="Phone No" required><br>
                <input type="submit" name="submit" value="SIGNUP" style="width:70px;height:26px;">
            </form>
        </div>
    </div>
    <?php
if (isset($_POST['submit'])) {
    mysqli_query($db, "INSERT INTO `student` 
        VALUES (
            '{$_POST['first']}',
            '{$_POST['last']}',
            '{$_POST['user']}',
            '{$_POST['pass']}',
            '{$_POST['roll']}',
            '{$_POST['email']}',
            '{$_POST['phone']}'
        )");

    ?>
    <script>
        alert("Registration is successful");
        window.location.href = 'student-login.php';
    </script>
    <?php
}
?>


</body>
</html>
