<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM publication";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">SERL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontFaculty.php">Faculty</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontResearcher.php">Researchers</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontProject.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="frontPublication.php">Publications</a></li>
                        <li class="nav-item"><a class="nav-link" href="resources.php">Resources</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <section class="py-5 border-bottom" style="background: rgb(241,91,50);
background: radial-gradient(circle, rgba(241,91,50,1) 0%, rgba(234,238,42,1) 100%);">
            <div class="container px-5 my-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <h1 class="proj">Publications</h1>
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
                                        <h3><?php echo $row['publicationName'];?></h3>
                                       <?php echo "Link to the publication: ";?>
                                       <h5><a href="<?php echo $row['link'];?>"> <?php echo $row['link'];?></a></h5>
                                       <br>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
        
                <?php
                }
            ?>
                        <!-- Testimonial 2-->
                        <!-- <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                        <div class="small text-muted">- Client Name, Location</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                     </div>
                </div>
            </div>
        </section>
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