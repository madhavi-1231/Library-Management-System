<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Page</title>
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
 margin-bottom:10px;
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

h2{
  font-size:35px;
  margin-left:10px;

}
h4{
background:white;
}
.container5{
  display:flex;
 justify-content:space-between;
}
.container6{
  display:flex;

}
input{
  margin-right:100px;
  
}
#image{
  background-color:aqua;
}


</style>
</head>
<body>
    <div class="navbar">
    <h4> ONLINE LIBRARY MANAGEMENT SYSTEM</h4>
    <a href="index.php">HOME</a>
   <a href="books.php">BOOKS</a>
   <a href="feedback.php">FEEDBACK</a>
   <a href="logout.php">LOGOUT</a>
   <a  href="">PROFILE</a>
</div>
  <div class="container5">
        <h2>List Of Books</h2>
<div class="container6">
  <form method="POST" action="">
    <input type="text" name="search" placeholder="Search books by title, author, or department" style="padding: 8px; width: 300px;">
    <input type="submit" name="submit" value="Search" style="padding: 8px;">
  </form>
</div>
</div>
  <br>
  <br>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <?php
  $searchTerm = "";
if (isset($_POST['submit']) && !empty($_POST['search'])) {
  $searchTerm = $db->real_escape_string($_POST['search']);
$sql = "SELECT * FROM books WHERE name LIKE '%$searchTerm%' OR author LIKE '%$searchTerm%' OR department LIKE '%$searchTerm%'";

}
else{
$sql ="SELECT * FROM `books` ORDER BY name ASC;";
}
$res = mysqli_query($db, $sql);

echo "<table class='table table-bordered table-hover'>";
echo "<tr>
  <th style='background-color:lightblue; color:white;'>Book ID</th>
  <th style='background-color:lightblue; color:white;'>BookName</th>
  <th style='background-color:lightblue; color:white;'>Author</th>
  <th style='background-color:lightblue; color:white;'>Edition</th>
  <th style='background-color:lightblue; color:white;'>Status</th>
  <th style='background-color:lightblue; color:white;'>Quantity</th>
  <th style='background-color:lightblue; color:white;'>Department</th>
</tr>";

while ($row = mysqli_fetch_assoc($res)) {
  echo "<tr>
    <td>{$row['bid']}</td>
    <td>{$row['name']}</td>
    <td>{$row['author']}</td>
    <td>{$row['edition']}</td>
    <td>{$row['status']}</td>
      <td>{$row['quantity']}</td>
        <td>{$row['department']}</td>
  </tr>";
}
echo "</table>";
?>




</body>
</html>