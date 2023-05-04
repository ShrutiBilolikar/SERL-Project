<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM researcher";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Researcher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles1.css" rel="stylesheet" />
    <style>
        /*styling cards*/
      .col-lg-6 .card-body .mb-3 .photo img{
        box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
        transition:0.7s;
        }

        .col-lg-6 .card-body .mb-3 .photo img:hover{
        transform:scale(1.1);
        z-index:2;
        }

        /*bold try */
        .col-lg-6{
        position:relative;
        width:800px;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding:30px;
        }

        .col-lg-6 .card-body{
        position:relative;
        max-width:400px;
        height:350px;
        background: #fff;
        margin: 30px 10px;
        padding:20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        transition: 0.2s ease-in-out;
        }

        .col-lg-6 .card-body:hover{
        height:900px;
        }

        .col-lg-6 .card-body .mb-3{
        position:relative;
        width:350px;
        height:350px;
        top:-100px;
        right:20px;
        z-index:1;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        justify-content:center;
        align-items:center;
        /* padding:1em; */
        }

        .col-lg-6 .card-body .mb-3 .text-muted{
            padding:1em;
            font-size:1.5em;
            font-family:helvetica;
            justify-content:center;
            color:black;
            align-items:center;
        }

        .col-lg-6 .card-body .mb-3 .photo{
            justify-content:center;
            align-items:center;
            height:150px;
            margin:1em;
        }

        .col-lg-6 .card-body .mb-3 .photo img{
            max-width:100%;
            border-radius:4px;
            align-items:center;
            margin-left:2rem;
            width:250px;
            height:180px;
            top:50%;
            left:50%;
        }

        .col-lg-6 .card-body .list-unstyled{
            position:relative;
            margin-top:-120px;
            padding:10px 15px;
            text-align:center;
            color:#111;
            visibility:hidden;
            opacity:0;
            transition: 0.3s ease-in-out;

        }

        .col-lg-6 .card-body:hover .list-unstyled{
            visibility:visible;
            opacity:1;
            margin-top:-80px;
            transition-delay:0.3s;
        }
        .btnf{
            background-color: white; 
            border: 2px solid black; 
            color: green; 
            padding: 5px 10px; 
            text-align: center; 
            display: inline-block; 
            font-size: 20px; 
            margin: 10px 30px; 
            cursor: pointer; 
            text-decoration:none; 
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
        <section class="bg-light py-3 border-bottom" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
    <div class="container px-5 my-5">
        <div class="text-center mb-5" style="padding-top:2rem; margin-top:6rem;">
            <h2 class="display-2 fw-bolder">Researchers</h2>
        </div>
        <div class="row gx-5 justify-content-center">
        <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-lg-6 col-xl-6">
                <!-- <div class="card mb-5 mb-xl-3"> -->
                    <div class="card-body p-5">
                        <div class="mb-3" style="background:#f7bfbf;">
                            <!-- <span class="display-6 fw-bold"><?php echo $row['name'];?></span> -->
                            <div class="photo"><?php echo "<img src='".$row['img_source']."' width= '50%'>" ;?></div>
                            <p class="text-muted"><?php echo $row['name'];?><br><?php echo $row['department'];?><br><?php echo "IIIT Allahabad";?></p>
                            <!-- <p class="text-muted"><?php echo "IIIT Allahabad";?></p> -->
                        </div>
                        <ul class="list-unstyled mb-4" style="background:#b8f2ef">
                            <li class="mb-2">
                            <b><?php echo "Description: "?></b>
                            <p><?php echo $row['description'];?></p>
                            </li>
                            <li class="mb-2">
                            <b><?php echo "Email: "?></b>
                            <?php echo $row['email'];?>
                            </li>
                            <li class="mb-2">
                            <b><?php echo "Mobile: "?></b>
                            <?php echo $row['mobile'];?>
                            <li>
                            <li>
                                <?php
                                $var=$row['researcherID'];
                                echo "<form action='researcher_page.php' method='POST'>
                                    <button class='btnf' name='ID' value='$var'>browse projects and publications</button>
                                </form>"
                                ?>
                            
                            </li>
                            </li>
                        </ul>
                        
                    </div>
                <!-- </div> -->
            </div>
            <?php
                }
            ?>  
        </div>
    </div>
</section>
<footer class="footer" style="margin-top:5rem;" >
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>