<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if((isset($_POST['id'])&&$_POST['name'])&& isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['address']) && isset($_POST['website'])&& isset($_POST['password'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $website=$_POST['website'];
            $password=$_POST['password'];
    
            $sql="INSERT INTO faculty VALUES ('$id','$name','$email','$phone','$address','$website','$password')";

            $query =mysqli_query($conn,$sql);
            if($query){
                header("Location: frontFaculty.php");
            }
            else{
                echo 'Value exists';
            }
           
        }
    }
?>