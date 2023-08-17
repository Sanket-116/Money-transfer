<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $gname = $_POST["name"];
    $gpass = $_POST["pass"];

    


    $select = $conn->prepare("SELECT * FROM info");

    $select->execute();
    $result = $select->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cname = $row["user_name"];
            $cpass = $row["pas"];
            if ($cname == $gname && $cpass == $gpass) {
                $_SESSION["gname"] = $gname;
                $count = "1";
            }
        }
    }
    if ($count == "1") {
        echo '<script type="text/javascript" >
        alert("login Successful")
        window.location.href="dex.php";;</script>';
    } else {
        echo '
        <script type="text/javascript" >
                alert("Incorrect Login-info");
                window.location.href="log.html";
                </script>';
    }


}
?>