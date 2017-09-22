<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 3:49 PM
 */

    session_start();
    unset($_SESSION['auth']);
    header("location:index.php");
?>