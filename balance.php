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
    <!-- nav -->
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
                        <a class="nav-link active" aria-current="page" href="dex.php"><i class="bi bi-person-check p-2"></i>
                            <?php
                            include("connect.php"); 
                            session_start(); // Start the session
                            
                            // Retrieve $gname from session
                            $gname = $_SESSION["gname"];

                            echo $gname;
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php"><i class="bi bi-clock-history p-2"></i>History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-bank2 p-2"></i>Balance</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mb-5">
                <span
                    style="margin: 60px 20px ; font-weight: 230 ; letter-spacing: 1.6px ; font-size: 60px ;display:block;">Current
                    Balance Is :</span>
                <span
                    style="margin: -60px 20px ; font-weight: 160 ;letter-spacing: 1.6px ;font-size: 42px ;display:block;position: absolute;"><?php
                    echo $bal ;
                    ?></span>
            </div>
            <div>



                <?php
                // Connect to the database
                include("connect.php");

                // SQL query to select the last record from a column
                $query = "SELECT bal FROM history WHERE SR = (SELECT MAX(SR) FROM history)";


                // Execute the query
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    // Fetch the last record
                    $row = $result->fetch_assoc();
                    $lastRecord = $row['bal'];

                    // Use the last record as needed
                    echo '<p style="font-size:70px ;letter-spacing:2px;font-weight:300;">'.$lastRecord.'.00';
                } else {
                    echo "No records found.";
                }
                
                // Close the database connection
                $conn->close();
                ?>

            </div>


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>