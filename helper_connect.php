<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'wunjoess');

    $db_connect = mysqli_connect(HOST,USER,PASS,DB) or die('Tidak berhasil connect');
?>