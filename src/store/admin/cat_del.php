<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 6:58 PM
 */

    include('conf/config.php');
    $id=$_GET['id'];
    $sql="DELETE FROM categories WHERE ID=$id";
    mysqli_query($conn,$sql);

    header("location:cat_list.php");
?>