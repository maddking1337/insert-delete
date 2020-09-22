<?php
    $conn=new mysqli("172.16.131.125", "z_iop", "fds", "z_iop");
    $del=$_POST['id_del'];
    $sql = "DELETE FROM pracownicy WHERE id_pracownicy=$del";
    mysqli_query($conn, $sql);
    header("Location: index.php");
?>