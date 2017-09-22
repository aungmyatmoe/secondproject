<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 3:47 PM
 */

    session_start();
    if(!isset($_SESSION['auth'])){
        header("location:index.php");
        exit();
    }
?>