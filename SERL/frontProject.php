<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM project";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles1.css" rel="stylesheet" />
        <style>
            .card{
                box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
                transition:0.7s;
            }
            .card:hover{
                transform:scale(1.1);
                z-index:2;
            }
        </style>
</head>
<body>
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
                        <li class="nav-item"><a class="nav-link" href="Courses.php">COURSES</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <section class="py-5 border-bottom" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:max-height">
            <div class="container px-5 my-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6" style="padding-top:2rem; margin-top:6rem;">
                        <!-- Testimonial 1-->
                        <!-- <h1 class="proj">Projects</h1> -->
                        <h2 class="display-2 fw-bolder" style="text-align:center;">Projects</h2>
                        <br>
                        <br>
        <table style="width:100%">        
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><h1><i class="bi bi-bookmarks-fill"></i></h1></div>
                                    <div class="ms-4">
                                       <h4><?php echo $row['projectName'];?></h4>
                                       <b><?php echo "Contribution by: ";?> </b>
                                       <span><?php echo $row['contributor'];?></span><br>
                                       <b><?php echo "Link to the project: ";?></b>
                                       <p><a href="<?php echo $row['link'];?>"> <?php echo $row['link'];?></a></p>
                                       <br>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
        
                <?php
                }
            ?>
                     </div>
                </div>
            </div>
        </section><br><br><br><br><br><br><br>

        <!-- <footer class="footer" style="margin:0;padding:0;" >
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
        </footer> -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>