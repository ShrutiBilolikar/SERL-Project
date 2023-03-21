<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Add researcher details</h1>
        <form action="connect3.php" method="POST">
            <label for="id">ID:</label><br>
            <input  type="text" name="id" id="id" required placeholder="ID"><br><br>
    
            <label for="">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
    
            <label for="phone">Phone:</label><br>
            <input type="text" name="phone" id="phone" required placeholder="Phone"><br><br>
    
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required placeholder="Email"><br><br>
            
            <label for="department">Department:</label><br>
            <input type="text" name="department" id="department" required placeholder="Department"><br><br>
    
            <label for="description">Description:</label><br>
            <input type="text" name="description" id="description" required placeholder="Description"><br><br>
    
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" required placeholder="Password"><br><br>
    
            <input type="submit" name="submit4" id="submit4">
        </form>
    </div>
</body>
</html>