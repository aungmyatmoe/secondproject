<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 12:25 PM
 */

    include("conf/config.php");
    $title=$_POST['title'];
    $author=$_POST['author'];
    $summary=$_POST['summary'];
    $price=$_POST['price'];
    $categories=$_POST['categories'];
    $cover_name=$_FILES['cover']['name'];
    $cover_tmp=$_FILES['cover']['tmp_name'];
    $cover_type=$_FILES['cover']['type'];

    if($cover_type == 'image/png' || $cover_type == 'image/gif' || $cover_type == 'image/jpeg'){
        move_uploaded_file($cover_tmp,"covers/$cover_name");
        $sql="INSERT INTO books(title,author,summary,price,category_id,cover,created_date,modified_at) VALUES('$title','$author','$summary',$price,$categories,'$cover_name',now(),now())";
        mysqli_query($conn,$sql);
    }

    header("location:book_list.php");
?>