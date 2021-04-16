<?php
    $host = "localhost";
    $db_name = "iium";
    $db_user = "root";
    $db_password = "";

    $sql_connect = mysqli_connect($host, $db_user, $db_password, $db_name);

    
    if (!$sql_connect) {
        echo "Failed to connect to database ! ";
    }
