<?php
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['type']) && isset($_POST['feedback']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $type=$_POST['type'];
        $feedback=$_POST['feedback'];

        function sendMail(){

            $name=$_POST['name'];
            $email=$_POST['email'];
            $type=$_POST['type'];
            $feedback=$_POST['feedback'];

            $mail = new PHPMailer(true);
            try{
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = '4serlmailsender@gmail.com'; // is responsible for sending mails to admin when a new form is submitted
                $mail->Password = 'ogzttamtggemowrk';

                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('4serlmailsender@gmail.com');
                $mail->addAddress('4serltester@gmail.com');  // our admin
                $mail->isHTML(true);

                $mail->Subject = "New Feedback Received!!";
                $mail->Body = '<html><body>';
                $mail->Body .= '<h2>This is a new feedback!</h2>';
                $mail->Body .= '<p><b>Name:</b> '.$name.' </p>';
                $mail->Body .= '<p><b>E-Mail:</b> '.$email.'</p>';
                $mail->Body .= '<p><b>Designation:</b> '.$type.'</p>';
                $mail->Body .= '<p><b>Feedback:</b> '.$feedback.'</p>';
                $mail->Body .= '</body></html>';
                                
                $mail->send();
                return true;
            }
            catch (Exception $e) {
                return false;
            }
        }

            $sql="INSERT INTO feedback(name,type,email,feedback) VALUES ('$name', '$type', '$email','$feedback')";
            if(sendMail() && $conn->query($sql) == true ){
                echo '<script>alert("Feedback submitted!");setTimeout(()=>{window.location.replace("index.php");},500);</script>';
            }
            else{
                echo '<script>alert(" Error occured");setTimeout(()=>{window.location.replace("index.php");},500);</script>';
            }
        }
        $conn->close();
?>