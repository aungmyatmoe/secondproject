<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 19/9/2017
 * Time: 7:35 PM
 */
-->
<?php
    session_start();
    $id=$_POST['id'];
    $password=$_POST['password'];

    if($id == "admin" && $password == "123") {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = "Admin";
    }

    header("location:third_lesson.php");

?>