<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 19/9/2017
 * Time: 7:52 PM
 */
-->

<?php
    session_start();
    unset($_SESSION['auth']);
    unset($_SESSION['id']);
    header("location:third_lesson.php");
?>