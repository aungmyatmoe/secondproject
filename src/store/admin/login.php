<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 3:49 PM
 */

    session_start();
    $name=$_POST['name'];
    $password=$_POST['password'];

    if($name == "admin" && $password == "123456789"):
        $_SESSION['auth']=true;
        header("location:book_list.php");
    else:
        header("location:index.php");
    endif;
?>