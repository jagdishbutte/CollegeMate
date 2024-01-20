<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ed2e42c68b.js" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="css/reg.css">
    <title>User Registration</title>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <form method="POST">
        <?php

        if (isset($_POST["signup"])) {

            $uname = $_POST["username"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $add = $_POST["address"];
            $pass = $_POST["password"];



            $conn = mysqli_connect("localhost", "root", "", "collegemate");
            $query = "INSERT INTO registration VALUES ('$uname', '$email','$mobile','$add', '$pass')";

            mysqli_query($conn, $query);

            echo '<script>alert("Registration Done Successfully");</script>';
        }

        ?>

        <div class="container">

            <hr>

            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Create Account</h4>
                    <p class="text-center">Get started with your free collegemate account</p>
                    <p>
                        <a href="" class="btn btn-block btn-google"> <i class="fab fa-google"></i> Login via Google</a>
                        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via
                            facebook</a>
                    </p>
                    <p class="divider-text">
                        <span class="bg-light">OR</span>
                    </p>
                    <form action="login.php">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Full name" type="text" id="a1" name="username"
                                pattern="^[A-Za-z\s\-]+$" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Email address" type="email" id="a2" name="email"
                                pattern=".+@gmail\.com|.+@yaahoo\.com" required>

                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" style="max-width: 120px;">
                                <option selected="">+91</option>
                                <option value="1">+92</option>
                                <option value="2">+18</option>
                                <option value="3">+71</option>
                            </select>
                            <input class="form-control" placeholder="Phone number" type="text" id="a3" name="mobile"
                                pattern="[6789]\d{9}" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-tree-city"></i></span>
                            </div>
                            <select class="form-control" id="a4" name="address" required>
                                <option selected="">Choose your city</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Nashik</option>
                                <option>Amravati</option>
                                <option>Nagpur</option>
                                <option>Aurangabad</option>
                            </select>
                        </div> <!-- form-group end.// -->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-venus-mars"></i></span>
                            </div>
                            <label style="margin-left: 5px;"> Choose Gender</label>
                            <input class="form-control" type="radio" name="g1">Male
                            <input class="form-control" type="radio" name="g1">Female
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Create password" type="password" id="password"
                                name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$"
                                title="Password must be at least 8 characters long and include at least one letter and one digit">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Repeat password" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="a6" name="signup"> Create
                                Account </button>
                        </div> <!-- form-group// -->
                        <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
                    </form>
                </article>
            </div> <!-- card.// -->

        </div>
        <!--container end.//-->

        <br><br>
        <article class="bg-secondary mb-3">
            <div class="card-body text-center">
                <h3 class="text-white mt-3">CollegeMate Inc.</h3>
                <p class="h5 text-white">All Rights Reserved @2024<br>
            </div>
            <br><br>
        </article>