<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="cdex.css">


</head>

<body class="bg-warning">


    <?php

    session_start(); // Start the session
    
    // Retrieve $gname from session
    $gname = $_SESSION["gname"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the submitted username and password
        $uname = $_POST["name"];
        $password = $_POST["pass"];
        $gname = $_SESSION['varname'];
        // Insert the login information into the database
        $sql = "INSERT INTO info (user_name, pas) VALUES ('$uname', '$password')";


    }


    ?>



    <!-- start nav -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container p-1">
            <a class="navbar-brand" href="#"><img class="icon-img" src="main icon.png" alt=""> Rockda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person-check p-2"></i>


                            <?php echo $gname; ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hisparent.php"><i class="bi bi-clock-history p-2"></i>History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-bank2 p-2"></i>Balance</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- end nav -->

    <!-- start form grid-->

    <div class="container">
        <div class="row ">
            <div class="col-md-12 mb-5  text-center ">
                <span
                    style="margin: 60px 20px ; font-weight: 230 ; letter-spacing: 1.6px ; font-size: 60px ;display:block;">Send
                    Money</span>
                <span
                    style="margin-top:  -60px ; font-weight: 160 ;letter-spacing: 1.6px ;font-size: 42px ;display:block;">To
                    Your Children</span>
            </div>

            <form action="updatebal.php" method="post">
            <div class="col-md-12  text-center">
                <div class="col-md-12  m-2 px-5  text-center ">

                    <input class="form-control p-4 rounded-4 text-center border border-dark" type="text" name="amount"
                        placeholder="Amount" aria-label="Amount">

                </div>

            </div>


            <div class="col-md-12 text-center mt-4">
                <button type="submit" formaction="updatebal.php" class="m-2 bg-dark btn">Pay Now</button>
            </div>
            </form>
        </div>
    </div>

    <!-- end form grid-->

    <!-- the pic -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="col-md-12">
        <img style="width: 100% ;" src="1.png" alt="">
    </div>


    <!-- the pic -->
    <div class="container-fluid bg-dark ">
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="container-fliud mb-3">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <h1 style="letter-spacing: 1px ; word-spacing: 2px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"
                                class=" text-center text-light ">MoneyMaster Let's you keep track of your Children
                                Spending </h1>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="m-2 bg-warning text-dark btn m-3 " href="history.php">Track</a>
                            <h3 class="text-white m-3 ">click this button to view transaction history</h3>
                        </div>

                        <!-- text -->
                        <div style="height: 100px; border-bottom: 2px solid rgb(186, 186, 186);"></div>
                        <!-- text end  -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- widow -->





    <!--  widow -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>