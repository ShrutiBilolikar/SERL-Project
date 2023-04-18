<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Faculty</title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>form .form .container{display:flex;}</style>
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh;">
        <h1>Add faculty details</h1>
        <form action="connect2.php" method="POST" class="form" enctype="multipart/form-data">
            <div class="container">
              <div class="l1">  <label for="id">ID:</label><br>
                <input  type="text" name="id" id="id" required placeholder="ID"><br><br> </l1>
        
                <div class="l2"><label for="">Name:</label><br>
                <input  type="text" name="name" id="name" required placeholder="Name"><br><br> </l2>
            </div>
            <div class="container">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" required placeholder="Email"><br><br>
        
                <label for="phone">Phone:</label><br>
                <input type="text" name="phone" id="phone" required placeholder="Phone"><br><br>
            </div>
            <div class="container">
                <label for="address">Address:</label><br>
                <input type="text" name="address" id="address" required placeholder="Address"><br><br>
        
                <label for="website">Website Link:</label><br>
                <input type="text" name="website" id="website" required placeholder="Website link"><br><br>
                </div>
            <div class="container">
                <label for="uploadfile">Upload Image:</label><br>
                <input type="file" name="uploadfile" id="uploadfile"><br><br>
        
                <label for="password">Password:</label><br>
                <input type="text" name="password" id="password" required placeholder="Password"><br><br>
            </div>
            <input type="submit" name="submit" id="submit" class="btn">
        </form>
    </div>
</body>
</html>