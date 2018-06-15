<?php
$link = mysqli_connect('localhost', 'root', 'bob123$$bob', 'hw');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

echo 'Connected... ' . mysqli_get_host_info($link) . "\n";
?>