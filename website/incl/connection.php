<?php
    define('db_host', 'localhost');
    define('db_user', 'root');
    define('db_pass', 'root');
    define('db_name', 'cartek');

    $mysqli = mysqli_connect(db_host, db_user, db_pass , db_name);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
    }

    $mysqli->set_charset("utf-8");
?>
