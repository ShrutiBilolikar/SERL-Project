<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit9'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if(isset($_POST['id'])&& isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['type']) && isset($_POST['feedback'])){

            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $type=$_POST['type'];
            $feedback=$_POST['feedback'];
            $sql="INSERT INTO feedback VALUES ('$id','$name','$email', '$type', '$feedback')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: index.php");
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