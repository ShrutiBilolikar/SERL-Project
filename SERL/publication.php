<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Publication</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh">
        <h1>Add Publication</h1>
        <form action="connect5.php" method="POST" class="form">
            <label for="id">ID:</label><br>
            <input  type="text" name="id" id="id" required placeholder="ID"><br><br>
    
            <label for="">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
    
            <label for="link">link:</label><br>
            <input type="text" name="link" id="link" required placeholder="Link"><br><br>
            
            <label for="contributorID">Contributor ID:</label><br>
            <input type="text" name="contributorID" id="contributorID" required placeholder="Contributor ID"><br><br>

    
            <input type="submit" name="submit5" id="submit5" class="btn">
        </form>
    </div>
</body>
</html>