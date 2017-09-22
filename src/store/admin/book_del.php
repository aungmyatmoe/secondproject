<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 12:26 PM
 */

    include("conf/config.php");
    $id=$_GET['id'];
    $sql="DELETE FROM books WHERE id=$id";
    mysqli_query($conn,$sql);

    header("location:book_list.php");
?>