<?php
    $date = date('d-m-y h:i:s');
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "data";
    $email = $_POST['email'];

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if ($conn->connect_error) {
        die('Connection failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(email,date) 
            values (?,?)");
        $stmt->bind_param("ss", $email, $date);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>

