<?php
$conn=mysqli_connect('localhost','root','','serl') or die("Connection failed" .mysqli_connect_error());
$ID = $_GET['ID'];
$sql="SELECT count(*) FROM faculty WHERE facultyID='$ID'";
$sql2="SELECT * FROM faculty WHERE facultyID='$ID'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$query2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($query2);
if($row[0]==1){
    // echo $row2[0];
    // echo $row2[2];
    // echo $row2[3];
    $sql3="SELECT count(*) FROM publicationcontributor WHERE contributorID='$ID'";
    $query3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_array($query3);
    if($row3[0]==1){
        $sql4="SELECT * FROM publication,publicationcontributor WHERE publication.publicationID=publicationcontributor.publicationID AND contributorID='$ID'";
        $query4=mysqli_query($conn,$sql4);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        </ul>
                </div>
            </div>
        </nav>
        <section class="bg-light py-3 border-bottom" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6 col-xl-6">
                <div class="card mb-5 mb-xl-3">
                    <div class="card-body p-5">
                        <div class="mb-3">
                            <span class="display-6 fw-bold"><?php echo $row2['name'];?></span>

                            <div><?php echo "<img src='".$row2['img_source']."' width= '50%'>" ;?></div>

                            <p class="text-muted"><?php echo "IIIT Allahabad";?></p>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                            <?php echo "Link: "?>
                            <a href="<?php echo $row2['website'];?>"> <?php echo $row2['website'];?></a>
                            </li>
                            <li class="mb-2">
                            <?php echo "Email: "?>
                            <?php echo $row2['email'];?>
                            </li>
                            <li class="mb-2">
                            <?php echo "Mobile: "?>
                            <?php echo $row2['mobile'];?>
                            </li>
                            <li class="mb-2">
                            <?php echo $row2['address'];?>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>












        <section class="py-5 border-bottom" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh;">
            <div class="container px-5 my-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <h1 class="proj">Publications</h1>
                        <br>
                        <br>
        <table style="width:100%">        
            <?php
                while($row4=mysqli_fetch_array($query4)){
                ?>
                <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><h1><i class="bi bi-bookmarks-fill"></i></h1></div>
                                    <div class="ms-4">
                                        <h3><?php echo $row4['publicationName'];?></h3>
                                       <?php echo "Link to the publication: ";?>
                                       <h5><a href="<?php echo $row4['link'];?>"> <?php echo $row4['link'];?></a></h5>
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
        </section>
<div class="tab1cards">

                <div class="card">
                    <b><a href="project.php">Add Project</a> </b>
                </div>
                <div class="card">
                    <b><a href="publication.php">Add Publication</a></b>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      
        </body>
</html>