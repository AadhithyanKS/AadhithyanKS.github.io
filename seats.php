<?php
    include("connection.php");
    
    $time = $_POST['time'];
    if(isset($_POST['seat'])){
        $seatno = $_POST['seat'];
        }

    else{
        echo "NO seat selected";
    }
    
    foreach($seatno as $seat){
        $sql = "INSERT INTO movie values($time,$seat)";
        $result = mysqli_query($conn,$sql);
    }
    
    ?>