<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 20/9/2017
 * Time: 7:33 PM
 */
-->
<?php
    $name=$_FILES['photo']['name'];
    $tmp=$_FILES['photo']['tmp_name'];
    $type=$_FILES['photo']['type'];

    if($type == 'image/jpeg' || $type='image/png' || $type='image/gif'){
        move_uploaded_file($tmp,"photo/$name");
    }

    header("location:file_upload.php");
?>