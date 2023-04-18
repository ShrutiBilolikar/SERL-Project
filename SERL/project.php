<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh">
    <h1>Add Project</h1>
<br><br>

    <form action="connect4.php" method="POST" class="form">
        <label for="ID">ProjectID:</label><br>
        <input type="text" name="ID" id="ID" required><br><br>

        <label for="dob">Project Link:</label><br>
        <input type="text" name="link" id="link" required><br><br>

        <label for="name">Project Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="cname">Contibutor Name:</label><br>
        <input type="text" name="cname" id="cname" required><br><br>
        
        <input type="submit" name="submit6" id="submit6" class="btn">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>