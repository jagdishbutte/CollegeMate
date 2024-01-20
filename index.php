<!DOCTYPE html>
<html lang="en">

<head>
    <title>CollegeMate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        body{
            background-color: azure;
        }
       
        footer {
            background-color: #d78e8e;
            padding: 25px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar">bar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CollegeMate</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="colleges.php">Colleges</a></li>
                    <li><a href="Login.php">Counselling</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron" style="background-image: url(images/giphy.gif); background-repeat: no-repeat; background-size: cover; height: 500px; position: relative;">
        <div class="overlay"></div>
        <div class="container text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h2 style="background-color: aqua; color: #2a0303; display: inline-block; border-radius: 5px; padding: 15px;">Find the Best Colleges for Your Higher Education</h2><br>
            <h3 style="background-color: aqua; color: #2a0303; display: inline-block; border-radius: 5px; padding: 10px;">We Have the Best Counselors for You...</h3>
        </div>
    </div>
    
    

    <div class="container-fluid bg-3 text-center" style="border-radius: 20px;">
        <h3>Some of best colleges in Pune</h3><br>
        <div class="row">
            <div class="col-sm-3">
                <p>COEP</p>
                <a href="https://www.coep.org.in/" target="_blank"><img src="images/coep.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>VIT</p>
                <a href="https://www.vit.edu/" target="_blank"><img src="images/vit.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>PCCOE</p>
                <a href="http://www.pccoepune.com/" target="_blank"><img src="images/pccoe.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>MIT</p>
                <a href="https://mitwpu.edu.in/" target="_blank"><img src="images/mit.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
        </div>
    </div><br>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-3">
                <p>PICT</p>
                <a href="https://pict.edu/" target="_blank"><img src="images/pict.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;"  alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>AISSMS</p>
                <a href="https://aissmscoe.com/" target="_blank"><img src="images/aissms.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>ZCOER</p>
                <a href="https://zcoer.in/" target="_blank"><img src="images/zcoer.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
            <div class="col-sm-3">
                <p>JSPM</p>
                <a href="https://jspm.edu.in/" target="_blank"><img src="images/jspn.jpeg" class="img-responsive" style="width: 350px; height: 185px; border-radius: 20px;" alt="Image">
                </a>
            </div>
        </div>
    </div><br><br>

    <footer class="container-fluid text-center">
        <article class="bg-secondary mb-3">
            <div class="card-body text-center">
                <p>
                    We'd love to hear from you! Whether you have feedback, suggestions, or just want to say hello, feel
                    free to reach out to us.
                </p>
                <img src="images/whatsapp.jpeg" class="img-responsive" alt="Contact Image 1" width="30px" height="'30px"
                    style="display: inline-block;">
                <img src="images/telegram.png" class="img-responsive" alt="Contact Image 2" width="30px" height="'30px"
                    style="display: inline-block;  margin-left: 20px;">
                <img src="images/linkedin.png" class="img-responsive" alt="Contact Image 3" width="30px" height="'30px"
                    style="display: inline-block;  margin-left: 20px;"><br><br>
                <p1 style="color: rgb(210, 231, 105);">
                    Thank you for choosing CollegeMate. We're here to support you on your journey to higher education!
                </p1>
                <h3 class="text-white mt-3">CollegeMate Inc.</h3>
                <p class="h5 text-white">All Rights Reserved @2024<br>
            </div>
            <br><br>
        </article>
    </footer>

</body>

</html>