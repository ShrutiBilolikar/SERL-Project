<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM project ORDER BY projectID";
    $result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
        <h1>Projects</h1>
        <div class="Project">
            <ol>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <li><?php echo $row['projectID']?> <?php echo $row['link']?>
                <?php echo $row['projectName']?> <?php echo $row['contributor']?>  </li>
                <?php
                }
            ?>
            </ol>
        </div>   
</body>
</html>