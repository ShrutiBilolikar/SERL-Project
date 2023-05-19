<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit6'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if(isset($_POST['CID'])&& isset($_POST['Cname']) && isset($_POST['it'])&& isset($_POST['mba']) && isset($_POST['faculty']) && isset($_POST['ta'])){

            $cid=$_POST['CID'];
            $cname=$_POST['Cname'];
            $it=$_POST['it'];
            $mba=$_POST['mba'];
            $faculty=$_POST['faculty'];
            $ta=$_POST['ta'];
            $sql="INSERT INTO courses VALUES ('$cid','$cname','$it','$mba','$faculty','$ta')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: Courses.php");
            }
            else{
                echo 'Value exists';
            }
        }
        else{
            echo 'Invalid input';
        }
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh">
    <h1>Add Course</h1>
<br><br>

    <form action="AddCourse.php" method="POST" class="form">
        <label for="CID">CourseID:</label><br>
        <input type="text" name="CID" id="CID" required><br><br>

        <label for="Cname">Course Name:</label><br>
        <input type="text" name="Cname" id="Cname" required><br><br>
         
        <label for="it">Enter Number of IT Department Students:</label><br>
        <input type="number" name="it" id="it" required><br><br>

        <label for="mba">Enter Number of MBA Students:</label><br>
        <input type="number" name="mba" id="mba" required><br><br>

        <label for="faculty">Faculty:</label><br>
        <input type="text" name="faculty" id="faculty" required><br><br>

        <label for="ta">TA Alloted:</label><br>
        <input type="text" name="ta" id="ta" required><br><br>
        
        <input type="submit" name="submit6" id="submit6" class="btn">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>