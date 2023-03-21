<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Add publication details</h1>
        <form action="connect5.php" method="POST">
            <label for="id">ID:</label><br>
            <input  type="text" name="id" id="id" required placeholder="ID"><br><br>
    
            <label for="">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
    
            <label for="link">link:</label><br>
            <input type="text" name="link" id="link" required placeholder="Link"><br><br>
            
            <label for="contributorID">Contributor ID:</label><br>
            <input type="text" name="contributorID" id="contributorID" required placeholder="Contributor ID"><br><br>

    
            <input type="submit" name="submit5" id="submit5">
        </form>
    </div>
</body>
</html>