<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 5:58 PM
 */
    $dbhost="127.0.0.1";
    $dbuser="dbuser";
    $dbpass="newpassword";
    $dbname="store";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
    mysqli_select_db($conn,$dbname);
?>