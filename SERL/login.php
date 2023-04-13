<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body{
            background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }
        .login-form{
            width:500px;
            padding:57px;
            border-radius:12px;
            display: flex;
            align-content: space-around;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top:10rem;
            /* margin-left:460px;
             */
             margin:auto;
            background:#fff;
        }
        .login-form h1{
            text-align:center;
        }
        .btn{
            display:inline-block;
            margin-left:74px;
            background:#57b846;
            color:#fff;
            
        }
        .login-form input{
                border: 1px solid #ccc;
                padding: 0.3rem 2.0rem;  
                border-radius:11px;   
        }
        .login-form:hover{
            box-shadow: 0 0 6px 4px rgba(0,212,255,1);
        }
        
    </style> -->
        <!-- <div class="login-form">
            <h1>Login</h1>
            <form action="connect1.php" method="POST">
                <div class="email">
                    <i class="fa fa-envelope icon"></i>
                    <input type="text" name='ID' id='ID' required placeholder="Username"> <br><br>
                </div>
                <div class="email">
                    <i class="fa fa-lock icon"></i>
                       <input type="password" name='password' id='password' required placeholder="Password"> <br><br>
                </div>            
                <input type="submit" name="submit1" id="submit1" class="btn">
            </form>
        </div> -->
        <!-- font -->

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="loginstyle.css">
</head>

<!-- start here -->  

<body id="body" style="background: rgb(207,231,247);
background: radial-gradient(circle, rgba(207,231,247,1) 0%, rgba(207,231,247,1) 100%); height:100vh;">

<form action="connect1.php" method="POST" class="form">
  
    <h2>Login</h2>
    <input type="text" placeholder="Your username" name="ID" id="ID">
    <input type="password" placeholder="Your password" name="password" id="password">
    <input type="submit" name="submit1" id="submit1" class="btn">

    <div class="socials">
    
 </form>
</div>


</body>
</html