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
    // echo $row2['name'];
    $sql3="SELECT count(*) FROM publicationcontributor WHERE contributorID='$ID'";
    $query3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_array($query3);

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
    <link href="styles1.css" rel="stylesheet">
    <link rel="stylesheet" href="facultypage.css">
</head>
<body>


<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                    <div class="mb-3">                            
                            <div class="photo" ><?php echo "<img src='".$row2['img_source']."' width='85%'>" ;?></div>                            
                        </div>
                    <div class="mt-3">
                      <h4><?php echo $row2['name'];?></h4>
                      <br>
                      <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">website</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['website'];?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['mobile'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    
                </div>
              </div>


            </div>
          </div>

        </div>
    </div>


<!-- 
        <section class="bg-light py-3 border-bottom" style="background: rgb(207,231,247);
                        background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
    <div class="container px-0 my-0">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg col-xl" style="background: rgb(207,231,247);
                        background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
                <div class="welcome">
                    <div class="name"><?php echo $row2['name'];?></div>
                </div>
                <div class="card mb-0 mb-xl-3">
                    <div class="card-body p-5" style="background:#f7bfbf;">
                        <div class="mb-3">                            
                            <div class="photo" ><?php echo "<img src='".$row2['img_source']."'>" ;?></div>                            
                        </div>
                        <ul class="list-unstyled mb-4" style="background:#b8f2ef;">
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
</section> -->
        <section class="py-5 border-bottom">
    <div class="container px-5 my-1 px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                        <?php
                        if($row3[0]>=1){
                            $sql4="SELECT * FROM publication NATURAL JOIN publicationcontributor WHERE contributorID='$ID'";
                            $query4=mysqli_query($conn,$sql4);

                        ?>

                        <h1 style="font-size:40px; font-weight:bold;text-align:center;" class="proj">My Publications</h1>
                        <br><br>
                        <!-- Testimonial 1-->
        <table style="width:100%">        
            <?php
                while($row4=mysqli_fetch_array($query4)){
                ?>
                <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><h1><i class="bi bi-bookmarks-fill"style="font-size:30px; height:3rem; color:#0d6efd"></i></h1></div>
                                    <div class="ms-4">
                                    <a style="text-decoration:none; color:black;" href="<?php echo $row4['link']?>">
                                            <p><?php echo $row4['publicationName'];?></p>    
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
        
                <?php
                }
            }
            ?>
                        <div class="tab1cards"style="margin-top:3em;">
                            <div class="card">
                                <img src="assets/addpro.png" alt="safari">
                                <h4><b><a href="project.php">Add Project</a></b></h4>
                            </div>

                            <div class="card">
                                <img src="assets/addpub.png" alt="safari">
                                <h4><b><a href="publication.php">Add Publication</a></b></h4>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      
        </body>
</html>