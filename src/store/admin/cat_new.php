<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 21/9/2017
 * Time: 6:57 PM
 */
-->
<html>
    <head>
        <title>New Category</title>
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
    include("conf/auth.php");
    ?>
        <ul class="menu">
            <li><a href="book_list.php">Manage Books</a></li>
            <li><a href="cat_list.php">Manage Categories</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <h1>New Category</h1>

        <form action="cat_add.php" method="post">
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name">

            <label for="remark">Remark</label>
            <textarea id="remark" name="remark"></textarea>

            <br><br>
            <input type="submit" value="Add Category">
        </form>
    </body>
</html>