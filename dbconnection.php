<?php

$db = mysqli_connect("localhost:3307", "root", "", "injection");
if (mysqli_connect_errno()) {
    echo "Failed to connect to Mysql:" . mysqli_connect_error();
}