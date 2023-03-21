<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM researcher";
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
        <h1>Researcher</h1>
        <table style="width:100%">        
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="facultyInfo">
                    <div class="fname">
                    <h1><?php echo $row['name'];?></h1>
                    <h4><?php echo $row['department'];?></h4>
                    <?php echo "IIIT Allahabad";?>
                    <br>
                    </div>
                    <h3>Description</h3>
                    <?php echo $row['description'];?>
                    <h3>Contact </h3>
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