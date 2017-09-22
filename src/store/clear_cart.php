<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 4:32 PM
 */
-->
<?php
    session_start();
    unset($_SESSION['cart']);
    header("location:index.php");
?>