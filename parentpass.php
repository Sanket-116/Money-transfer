<?php
session_start(); 

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $gname = $_POST["name"];
    $gpass = $_POST["pass"];

    

    $select = $conn->prepare("SELECT * FROM parent");

    $select->execute();
    $result = $select->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cname = $row["user_name"];
            $cpass = $row["pas"];
            if ($cname == $gname && $cpass == $gpass) {
                $_SESSION["gname"] = $gname; 
                $count = 1;
            }
        }
    }

    if ($count == 1) {
        echo '
        <script type="text/javascript">
            alert("Login Successful");
            window.location.href="dexparent.php";
        </script>';
    } else {
        echo '
        <script type="text/javascript">
            alert("Incorrect Login Information");
            window.location.href="log.html";
        </script>';
    }
}
?>
