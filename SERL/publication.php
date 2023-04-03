<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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