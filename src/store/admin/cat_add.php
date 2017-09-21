<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 6:58 PM
 */
    include("conf/config.php");
    $name=$_POST["name"];
    $remark=$_POST["remark"];

    $sql="INSERT INTO categories(name,remark,created_date,modified_date) VALUES ('$name','$remark',now(),now())";

    mysqli_query($conn,$sql);

    header("location:cat_list.php")
?>