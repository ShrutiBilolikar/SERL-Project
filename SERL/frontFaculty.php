<?php 
    //session_start();
    //$temp=$_SESSION['uid'];
    $conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
    $query="SELECT * FROM faculty";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
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
                    </ul>
                </div>
            </div>
        </nav>
<section class="bg-light py-3 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="display-2 fw-bolder">Faculty</h2>
        </div>
        <div class="row gx-5 justify-content-center">
        <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-lg-6 col-xl-6">
                <div class="card mb-5 mb-xl-3">
                    <div class="card-body p-5">
                        <div class="mb-3">
                            <span class="display-6 fw-bold"><?php echo $row['name'];?></span>

                            <div><?php echo "<img src='".$row['img_source']."' width= '50%'>" ;?></div>

                            <p class="text-muted"><?php echo "IIIT Allahabad";?></p>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                            <?php echo "Link: "?>
                            <a href="<?php echo $row['website'];?>"> <?php echo $row['website'];?></a>
                            </li>
                            <li class="mb-2">
                            <?php echo "Email: "?>
                            <?php echo $row['email'];?>
                            </li>
                            <li class="mb-2">
                            <?php echo "Mobile: "?>
                            <?php echo $row['mobile'];?>
                            </li>
                            <li class="mb-2">
                            <?php echo $row['address'];?>
                            </li>
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

                          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>