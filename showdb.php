<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

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
    

    <div class="container" style="margin-top: 20px">
        <h1 style="text-align: center">User Details</h1><br><br>
        <table class="table table-striped">
            <tr>
                <th>Usernae</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Password</th>

            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "collegemate");
            $query = "select * from registration";
            $res = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($res)) {

                ?>
                <tr>
                    <td>
                        <?php echo $row["username"]; ?>
                    </td>
                    <td>
                        <?php echo $row["email"]; ?>
                    </td>
                    <td>
                        <?php echo $row["mobile"]; ?>
                    </td>
                    <td>
                        <?php echo $row["address"]; ?>
                    </td>
                    <td>
                        <?php echo $row["password"]; ?>
                    </td>
                </tr>
                <?php

            }

            ?>
        </table>
        <div>
</body>


</html>