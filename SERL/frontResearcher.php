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
        <section class="bg-light py-3 border-bottom" style="background: rgb(241,91,50);
background: radial-gradient(circle, rgba(241,91,50,1) 0%, rgba(234,238,42,1) 100%);">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="display-2 fw-bolder">Researchers</h2>
        </div>
        <div class="row gx-5 justify-content-center">
        <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-lg-8 col-xl-6">
                <div class="card mb-5 mb-xl-3">
                    <div class="card-body p-5">
                        <div class="mb-3">
                            <span class="display-6 fw-bold"><?php echo $row['name'];?></span>
                            <div><?php echo "<img src='".$row['img_source']."' width= '50%'>" ;?></div>
                            <p class="text-muted"><?php echo $row['department'];?></p>
                            <p class="text-muted"><?php echo "IIIT Allahabad";?></p>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                            <p><?php echo $row['description'];?></p>
                            </li>
                            <li class="mb-2">
                            <?php echo "Email: "?>
                            <?php echo $row['email'];?>
                            </li>
                            <li class="mb-2">
                            <?php echo "Mobile: "?>
                            <?php echo $row['mobile'];?>
                        </ul>

                    </div>
                </div>
            </div>
            <?php
                }
            ?>  
        </div>
    </div>
</section>
<footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; SERL 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>