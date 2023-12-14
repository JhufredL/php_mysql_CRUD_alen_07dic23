<?php
    session_start();

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_mysql_crud_alen_07dic23'
    ) or die(mysqli_error($mysqli));
?>