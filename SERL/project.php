<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add new Project</h1>

    <div><h2>Enter Project details</h2></div>

    <form action="connect4.php" method="POST">
        <label for="ID">ProjectID:</label><br>
        <input type="text" name="ID" id="ID" required><br><br>

        <label for="dob">Project Link:</label><br>
        <input type="text" name="link" id="link" required><br><br>

        <label for="name">Project Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="cname">Contibutor Name:</label><br>
        <input type="text" name="cname" id="cname" required><br><br>
        
        <input type="submit" name="submit6" id="submit6">
    </form>
</body>
</html>