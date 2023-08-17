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
                        <a class="nav-link active" aria-current="page" href="#">
                            <?php 
                            
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Get the submitted username and password
                                $uname = $_POST["name"];
                                $password = $_POST["pass"];
                            
                                // Insert the login information into the database
                                $sql = "INSERT INTO info (user_name, pas) VALUES ('$uname', '$password')";
                                echo $uname;
                            }
                            
                            
                            
                            
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Balance</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- end nav -->

    <!-- start form grid-->


    <div style="margin: 150px;" class="mardiv">

        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="card bg-white rounded-4 m-5">
                    <div class="logo text-center">
                        <img style="width: 60%;" src="2702761.png" alt="">
                    </div>
                    <div class="card-body">
                        <form action="new copy.php" method="post">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person "></i>
                                    </span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="User Name">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                </div>
                                <input type="text" name="amount" class="form-control " placeholder="Password">
                            </div>

                            <button type="submit" formaction="new copy.php" class="m-2 bg-dark btn">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end form grid-->

    <!-- the pic -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="col-md-12" >
        <img style="width: 100%;" src="pic.png" alt="">
    </div>

    <!-- the pic -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>