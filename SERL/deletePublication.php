<?php 
    // session_start();
    // $temp=$_SESSION['uid'];
    
    
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit3'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        $temp=$_POST['id'];
        $query= "DELETE FROM publication WHERE publicationID='$temp'";
        $q1=mysqli_query($conn,$query);
        header("Location: admin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Faculty</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<form action="deletePublication.php" method="POST" class="form">
        <h3>Delete Publication</h3>
        <label for="id">Enter PublicationID:</label><br>
        <input type="text" name="id" id="id" required placeholder="ID"><br><br>
        <input type="submit" name="submit3" id="submit3"  class="btn">
    </form>
</body>
</html>