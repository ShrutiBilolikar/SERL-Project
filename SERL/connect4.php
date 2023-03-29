<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit6'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if(isset($_POST['ID'])&& isset($_POST['link']) && isset($_POST['name'])&& isset($_POST['cname'])){

            $id=$_POST['ID'];
            $link=$_POST['link'];
            $name=$_POST['name'];
            $cname=$_POST['cname'];
            $sql="INSERT INTO project VALUES ('$id','$link','$name','$cname')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: frontProject.php");
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