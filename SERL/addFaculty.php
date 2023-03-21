<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Add faculty details</h1>
        <form action="connect2.php" method="POST">
            <label for="id">ID:</label><br>
            <input  type="text" name="id" id="id" required placeholder="ID"><br><br>
    
            <label for="">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
    
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required placeholder="Email"><br><br>
    
            <label for="phone">Phone:</label><br>
            <input type="text" name="phone" id="phone" required placeholder="Phone"><br><br>
    
            <label for="address">Address:</label><br>
            <input type="text" name="address" id="address" required placeholder="Address"><br><br>
    
            <label for="website">Website Link:</label><br>
            <input type="text" name="website" id="website" required placeholder="Website link"><br><br>
    
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" required placeholder="Password"><br><br>
    
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>