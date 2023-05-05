<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit9'])){
        $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['type']) && isset($_POST['feedback'])){

            // $id=$_POST['id'];
            $name1=$_POST['name'];
            $email1=$_POST['email'];
            $type1=$_POST['type'];
            $feedback1=$_POST['feedback'];
            $sql="INSERT INTO feedback (name,type,email,feedback) VALUES ('$name1','$type1','$email1','$feedback1')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: index.php");
            }
            else{
                echo $conn->error;
            }
        }
        else{
            echo 'Invalid input';
        }
        }
    
?>