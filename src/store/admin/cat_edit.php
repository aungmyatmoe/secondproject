<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 6:58 PM
 */
-->
<html>
    <head>
        <title>Edit Category</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            form label{
                display: block;
                margin-top: 8px;
            }
        </style>
    </head>
    <body>
        <?php
            include("conf/config.php");
            $id=$_GET['id'];
            $mysql="SELECT * FROM Categories WHERE id=$id";
            $result=mysqli_query($conn,$mysql);
            $row=mysqli_fetch_assoc($result);
        ?>
        <ul class="menu">
            <li><a href="book_list.php">Manage Books</a></li>
            <li><a href="cat_list.php">Manage Categories</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <h1>Edit Category</h1>

        <form action="cat_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']?>">

            <label for="remark">Remark</label>
            <textarea id="remark" name="remark"><?php echo $row['remark']?></textarea>

            <br><br>
            <input type="submit" value="Update Category">
        </form>
    </body>
</html>