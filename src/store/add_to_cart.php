<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 4:31 PM
 */
-->

<?php
    session_start();
    $id=$_GET['id'];
    $_SESSION['cart'][$id]++;
    header("location:index.php")
?>