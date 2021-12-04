<?php
    include("connection.php");
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO userdetails values('','$name','$username','$password')";
    
    $res = mysqli_query($conn,$sql);
?>