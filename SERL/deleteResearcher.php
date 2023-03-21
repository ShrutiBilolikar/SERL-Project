<?php 
    // session_start();
    // $temp=$_SESSION['uid'];
    
    
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit2'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        $query= "DELETE FROM researcher WHERE researcherID='$temp'";
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
    <title>Delete Researcher</title>
</head>
<body>
<form action="deleteResearcher.php" method="POST">
        <h3>Delete Researcher</h3>
        <label for="">Enter Researcher id:</label><br>
        <input  type="text" name="id" id="id" required placeholder="ID"><br><br>
        <input type="submit" name="submit2" id="submit2">
</form>
</body>
</html>