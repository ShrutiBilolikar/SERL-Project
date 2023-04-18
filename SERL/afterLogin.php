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
    <style>

        section{
            padding:3em;
        }
        
        .container .row .col-lg .card{
            margin:3em;
            background:rgb(207,231,247);
        }

        .container .row .col-lg .card .card-body{
            margin-top:10em;
        }
        .container .row .col-lg .welcome{
            margin:4em;
            text-align:center;
        }
        .container .row .col-lg .welcome .name{
            font-weight:2em;
            font-family:helvetica;
            font-size:3em;
        }

        .col-lg .card .card-body{
            width:800px;
            height:400px;
        }

         /*styling cards*/
      .col-lg .card-body .mb-3 .photo img{
        box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
        transition:0.7s;
        }

        .col-lg .card-body .mb-3 .photo img:hover{
        transform:scale(1.1);
        z-index:2;
        }

        /*bold try */
        .col-lg{
        position:relative;
        width:800px;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding:30px;
        background: #000;
        }

        .col-lg .card .card-body{
        position:relative;
        max-width:400px;
        height:350px;
        /* background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); */
        margin: 30px 10px;
        padding:20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        transition: 0.2s ease-in-out;
        }

        .col-lg .card .card-body:hover{
        height:550px;
        }

        .col-lg .card .card-body {
        position:relative;
        width:450px;
        height:450px;
        top:-100px;
        right:20px;
        z-index:1;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        justify-content:center;
        align-items:center;
        }

        .col-lg .card .card-body.photo{
            justify-content:center;
            align-items:center;
            height:150px;
            margin:1em;
        }

        .col-lg .card .card-body .photo img{
            max-width:100%;
            border-radius:4px;
            align-items:center;
            /* margin-left:2rem; */
            width:450px;
            height:300px;
            z-index:1;
            top:300px;
            right:20px;
        }

        .col-lg .card .card-body .list-unstyled{
            position:relative;
            margin-top:-120px;
            padding:10px 15px;
            text-align:center;
            color:#111;
            visibility:hidden;
            opacity:0;
            transition: 0.3s ease-in-out;

        }

        .col-lg .card .card-body:hover .list-unstyled{
            visibility:visible;
            opacity:1;
            margin-top:30px;
            transition-delay:0.3s;
        }

        .card .card-body{
            box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
            transition:0.7s;
        }

        .card .card-body:hover{
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
                        <li class="nav-item"><a class="nav-link" href="index.php">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="bg-light py-3 border-bottom" style="background: rgb(207,231,247);
                        background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
    <div class="container px-0 my-0">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg col-xl" style="background: rgb(207,231,247);
                        background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%);">
                <div class="welcome">
                    <h1>Welcome Back!</h1>
                    <div class="name"><?php echo $row2['name'];?></div>
                </div>
                <div class="card mb-0 mb-xl-3">
                    <div class="card-body p-5" style="background:#f7bfbf;">
                        <div class="mb-3">                            
                            <div class="photo" ><?php echo "<img src='".$row2['img_source']."'>" ;?></div>                            
                        </div>
                        <ul class="list-unstyled mb-4" style="background:#b8f2ef;">
                            <!-- <h2 class="display-6 fw-bold"><?php echo $row2['name'];?></h2> -->
                            <!-- <p class="text-muted"><?php echo "IIIT Allahabad";?></p> -->
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
                        
                    <!-- </div> -->
                </div>
            </div> 
        </div>
    </div>
</section>
        <section class="py-5 border-bottom" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:max-height;">
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
                        <!--<div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="publication.php">Add Publication</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-bell-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;"  href="project.php">Add Project</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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