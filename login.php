<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ed2e42c68b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/reg.css">

</head>

<body>

    <?php
    if (isset($_POST['signin'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $conn = mysqli_connect("localhost", "root", "", "collegemate");
        $q1 = "select * from registration where email='$email' and password='$pass'";
        $res = mysqli_query($conn, $q1);
        $count = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $count = $count + 1;
        }


        if ($count == 1) {
            ?>
            <script>
                window.location = "index.html";
            </script>

            <?php

        } else {
            ?>
            <script>
                alert("Invalid Email or Password");
            </script>

            <?php

        }

    }

    ?>

    <div class="container">

        <hr>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Sign In</h4>
                <p class="text-center">Sign In to get free counselling from CollegeMate</p>
                <p>
                    <a href="" class="btn btn-block btn-google"> <i class="fab fa-google"></i> Sign in with Google</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Sign in with
                        Facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form method="POST" action="counselling.php">

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Email address" type="email" id="b1" name="email">

                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Enter password" type="password" id="b2"
                            name="password">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" id="b3" name="signin"> Sign In
                        </button>
                    </div> <!-- form-group// -->

                    <p class="text-center">Don't have an account? <a href="form.php">Sign Up</a> </p>
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

</body>



</html>