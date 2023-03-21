<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit4'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if((isset($_POST['id'])&&$_POST['name'])&& isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['description']) && isset($_POST['department'])&& isset($_POST['password'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $department=$_POST['department'];
            $description=$_POST['description'];
            $password=$_POST['password'];
             $sql="INSERT INTO researcher VALUES ('$id','$name','$phone','$description','$email','$department','$password')";

            $query =mysqli_query($conn,$sql);
            if($query){
                header("Location: frontResearcher.php");
            }
            else{
                echo 'Value exists';
            }
       
        }
    }
    ?>