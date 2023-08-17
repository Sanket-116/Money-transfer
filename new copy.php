<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "Login-info";


$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    


     
    $query = "SELECT bal FROM history WHERE SR = (SELECT MAX(SR) FROM history)";

    // fro excution of query
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        $lastRecord = $row['bal'];
    }
    $bal = $lastRecord;

    $rname = $_POST["name"];
    $cash = $_POST["amount"];
    $bal -= $cash;

    
    $sql = "INSERT INTO history (receiver,amount,bal) VALUES ('$rname', '$cash','$bal')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript" >
        alert("Payment Successful");
        window.location.href="dex.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>