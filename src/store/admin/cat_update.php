<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 6:58 PM
 */
    include('conf/config.php');
    $id=$_POST['id'];
    $name=$_POST['name'];
    $remark=$_POST['remark'];
    $sql="UPDATE categories SET name='$name',remark='$remark' WHERE id=$id";
    mysqli_query($conn,$sql);

    header("location:cat_list.php");
?>