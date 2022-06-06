<?php
    
    $servername = "localhost";
    $username = "id18279637_debarghyabasak";
    $password = "SNH_qZMgGe%3xmK_";
    $dbname = "id18279637_uemhelper";

    $connect = mysqli_connect($servername,$username,$password,$dbname);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }


?>