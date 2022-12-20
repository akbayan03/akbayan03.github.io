<?php
    $name =$_GET["name"];
    $password = $_GET["password"];
    //Database connection

    $host = "localhost";
    $dbname = "fidatotravel";
    $username = "root";
    $password = "";
    mysqli_connect(hostname:$host, username:$username, password:$password, database:$dbname);
    if(mysqli_connect_errno()){
        die("Connection error: ")
    }

    $sql = "INSERT INTO table_name (ID, NAME,PASSWORD)
            VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "iss",1,$name,$password);
    mysqli_stmt_execute($stmt);
?>