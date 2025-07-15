<?php
include"connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback page</title>
    <style>
          body{
        margin:0;
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
h2{
  font-size:35px;
  margin-left:10px;
}
h4{
    background-color:white;;
    font-size:35px;
}
body{
  
  background-image: url("images/pexels-ann-h-45017-6732757.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height:90vh;

}
input{
    margin-left:10px;
}
.container1 {
 /* Light grey background */
  padding: 20px;
  border-radius: 10px;

}



        </style>
</head>
<body>
     <div class="navbar">
    <h4> ONLINE LIBRARY MANAGEMENT SYSTEM</h4>
     <a href="index.php">HOME</a>
   <a href="books.php">BOOKS</a>
   <a href="feedback.php">FEEDBACK</a>
   <a href="student-login.php">LOGIN</a>
   <a href="logout.php">LOGOUT</a>
   <a href="registration.php">SIGNUP</a>
  </div>
  <div class="container1">
  <h4>IF you have any suggestions and any Queries please comment on below</h4>
  <form action="" method="POST">
    <input type="text" name="comment" placeholder="write Something"style="width:500px;height:100px;">
    <br>
    <br>
  <input type="submit" name="submit" value="Comment" style="width:72px;height:26px;">
</form>
</div>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
// if(isset($_POST['submit'])){
//     $sql="INSERT INTO `comments` VALUES('$_POST[comment]');";
//     mysqli_query($db,$sql);
// }
// Connect to the database
$db = new mysqli("localhost", "root", "", "library");
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// 1️⃣ Handle form submission
if (isset($_POST['submit']) && isset($_POST['comment'])) {
  $comment = $_POST['comment'];

  $stmt = $db->prepare("INSERT INTO comments (comments) VALUES (?)");
  $stmt->bind_param("s", $comment);

  if ($stmt->execute()) {
    echo "<p style='color:green;'></p>";
  } else {
    echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
  }

  $stmt->close();
}

// 2️⃣ Display all comments
$sql = "SELECT * FROM comments;";
$res = mysqli_query($db, $sql);

echo "<table class='table table-bordered table-hover bg-color:black;'>";
echo "<tr><th>Comment</th></tr>";

while ($row = mysqli_fetch_assoc($res)) {
  echo "<tr><td>{$row['comments']}</td></tr>";
}
echo "</table>";

// ✅ Now close the connection
$db->close();
?>





</body>
</html>