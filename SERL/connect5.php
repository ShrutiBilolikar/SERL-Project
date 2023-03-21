<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit5'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if((isset($_POST['id'])&&$_POST['name'])&& isset($_POST['link'])&& isset($_POST['contributorID']) ){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $link=$_POST['link'];
            $contributorID=$_POST['contributorID'];
            
            $sql="INSERT INTO publication VALUES ('$id','$link','$name')";
            $sql2="INSERT INTO publicationcontributor VALUES ('$id','$contributorID')";

            $query =mysqli_query($conn,$sql);
            $query2 =mysqli_query($conn,$sql2);

            if($query){
                header("Location: frontPublication.php");
            }
            else{
                echo 'Value exists';
            }
           
        }
    }
    ?>