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
    <link rel="stylesheet" href="his.css">
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="dexparent.php"><i class="bi bi-person-check p-2"></i>


                            <?php 
                            session_start(); 
    
                            
                            $gname = $_SESSION["gname"];
                        
                            echo $gname ;?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="history.php">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="balance.php">Balance</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- end nav -->



    <div class="container mt-5">
        <div class="row m-2 p-2 ">
            <table class="table table-bordered text-center dabba">
                <tr class="top-row ">
                    <td>
                        Sender
                    </td>
                    <td>
                        Receiver
                    </td>
                    <td>
                        Amount
                    </td>
                    <td>
                        Balance
                    </td>
                    <td>
                        Status
                    </td>

                </tr>





                <?php

                include("connect.php");


                $select = $conn->prepare("SELECT * FROM history");

                $select->execute();
                $result = $select->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $vsender = $row["sender"];
                        $vreceiver = $row["receiver"];
                        $vamount = $row["amount"];
                        $vbal = $row["bal"];
                        echo "
                                <tr>
                                    <th>
                                        " . $vsender . "
                                    </th>
                                    <th>
                                        " . $vreceiver . "
                                    </th>
                                    <th>
                                        " . $vamount . "
                                    </th>
                                    <th>
                                        " . $vbal . "
                                    </th>
                                    <th class='p-'>
                                        <a href='#' class='btn btn-success  '>Successful</a>
                                    </th>
                                </tr>
                                ";
                    }
                }

                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>