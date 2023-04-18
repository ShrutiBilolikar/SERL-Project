<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="adminstyle.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="styles1.css" rel="stylesheet" />
</head>
<body style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh">

        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top"><img src="serl.jpg" alt="logo" height="70rem" width="70rem"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">HOMEPAGE</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontFaculty.php">FACULTY</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontResearcher.php">RESEARCHER</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontProject.php">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontPublication.php">PUBLICATION</a></li>
                        <li class="nav-item"><a class="nav-link" href="resources.php">RESOURCES</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            <div class="tab1cards" style="margin-top:10em;">
                <div class="card">
                    <img src="assets/addfaculty.png" alt="safari">
                    <h4><b><a href="addFaculty.php">Add faculty</a> </b></h4>
                </div>
                <div class="card">
                    <img src="assets/deletefaculty.png" alt="safari">
                    <h4><b><a href="deleteFaculty.php">Delete faculty</a></b></h4>
                </div>
                <div class="card">
                    <img src="assets/addresearch.png" alt="safari">
                    <h4><b><a href="addResearcher.php">Add Researcher</a></b></h4>
                </div>
                <div class="card">
                    <img src="assets/deleteresearch.png" alt="safari">
                    <h4><b><a href="deleteResearcher.php">Delete Researcher</a></b></h4>
                </div>
            </div>
            <div class="tab1cards"style="margin-top:3em;">
                <div class="card">
                    <img src="assets/addpro.png" alt="safari">
                    <h4><b><a href="project.php">Add Project</a></b></h4>
                </div>
                <div class="card">
                    <img src="assets/deletepro.png" alt="safari">
                    <h4><b><a href="deleteProject.php">Delete Project</a></b></h4>
                </div>
                <div class="card">
                    <img src="assets/addpub.png" alt="safari">
                    <h4><b><a href="publication.php">Add Publication</a></b></h4>
                </div>
                <div class="card">
                    <img src="assets/deletepub.png" alt="safari">
                    <h4><b><a href="deletePublication.php">Delete Publication</a></b></h4>
                </div>
            </div>

        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>

            <ul class="menu">
                <li class="menu__item"><a class="fa fa-facebook" href="https://www.facebook.com/iiitall/" target="_blank"></a></li>
                <li class="menu__item"><a class="fa fa-twitter" href="https://twitter.com/iiita_official?lang=en" target="_blank"></a></li>
                <li class="menu__item"><a class="fa fa-google" href="https://www.iiita.ac.in/" target="_blank"></a></li>
                <li class="menu__item"><a class="fa fa-linkedin" href="https://www.linkedin.com/school/indian-institute-of-information-technology-allahabad-india/?originalSubdomain=in" target="_blank"></a></li>
            </ul>
            <p style="opacity: 0.75;font-size:1.1rem;">Copyright &copy; SERL 2023</p>
        </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>

<!-- <div style="display:block">
    <h1>Admin side</h1>
    <br>
    <a href="addFaculty.php">Add faculty</a>   
    <br>   
    <a href="deleteFaculty.php">Delete faculty</a>
    <br>   
    <a href="addResearcher.php">Add Researcher</a>
    <br>   
    <a href="deleteResearcher.php">Delete Researcher</a>
</div> -->
