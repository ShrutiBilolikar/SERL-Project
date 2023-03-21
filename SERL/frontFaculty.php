<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM faculty";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Faculty</h1>
        <br>
        <br>
        <table style="width:100%">
        
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="facultyInfo">
                    <div class="fname">
                    <h1><?php echo $row['name'];?></h1>
                    <br>
                    <?php echo "IIIT Allahabad";?>
                    <br>
                    </div>
                    <h3>Address</h3>
                    <?php echo $row['address'];?>
                    <h3>Contact </h3>
                    <?php echo "Link: "?>
                    <?php echo $row['website'];?><br>
                    <?php echo "Email: "?>
                    <?php echo $row['email'];?><br>
                    <?php echo "Mobile: "?>
                    <?php echo $row['mobile'];?><br>
                </div>
        
                <?php
                }
            ?>
            
    </div>
    
</body>
</html>