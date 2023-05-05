<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh;">
        <h1>Feedback Form</h1>
        <form action="connectFeedback.php" method="POST" class="form" enctype="multipart/form-data">
            <!-- <label for="id">ID:</label><br>
            <input  type="text" name="id" id="id" required placeholder="5" value="5"><br><br> -->
    
            <label for="">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
    
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required placeholder="Email"><br><br>
    
            <label for="">Choose your role:</label><br>
            <select id="type" name="type">
                <option value="Faculty">Faculty</option>
                <option value="Researcher">Researcher</option>
                <option value="Student">Student</option>
            </select>
           <!-- <input  type="text" name="type" id="type" required placeholder="Faculty/Researcher/Student">-->
           <br><br>

            <label for="">Feedback:</label><br>
            <input  type="text" name="feedback" id="feedback" required placeholder="Feedback"><br><br>
    
            <input type="submit" name="submit9" id="submit9" class="btn">
        </form>
    </div>
</body>
</html>