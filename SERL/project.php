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
<br><br>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">SERL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index1.php">HOMEPAGE</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontFaculty.php">FACULTY</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontResearcher.php">RESEARCHER</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontProject.php">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="resources.php">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>