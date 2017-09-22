<?php
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 12:26 PM
 */

    include("conf/config.php");
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $summary=$_POST['summary'];
    $price=$_POST['price'];
    $category_id=$_POST['categories'];

    $cover=$_FILES['cover']['name'];
    $tmp=$_FILES['cover']['tmp_name'];

    if($cover){
        move_uploaded_file($tmp,"covers/$cover");
        $sql="UPDATE books SET title='$title',author='$author',summary='$summary',price=$price,category_id=$category_id,cover='$cover',modified_date=now() WHERE id=$id";
    }else{
        $sql="UPDATE books SET title='$title',author='$author',summary='$summary',price=$price,category_id=$category_id,modified_date=now() WHERE id=$id";
    }

    mysqli_query($conn,$sql);
    header("location:book_list.php");
?>