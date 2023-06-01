<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "oceanone";

    // creare connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT Country, Amounts FROM sampah";
    $result = mysqli_query($conn, $sql);
?>