<?php
    $conn=new mysqli("172.16.131.125", "z_iop", "fds", "z_iop");
    $imie=$_POST['imie'];
    $zarobki=$_POST['zarobki'];
    $dzial=$_POST['dzial'];
    $sql = "INSERT INTO pracownicy(imie, zarobki, dzial) VALUES ('$imie', '$zarobki', '$dzial')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
?>