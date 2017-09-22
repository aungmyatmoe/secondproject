<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 22/9/2017
 * Time: 12:25 PM
 */
-->

<html>
    <head>
        <title>New Book</title>
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
        <h1>New Book</h1>
        <form action="book_add.php" method="post" enctype="multipart/form-data">
            <label for="title">Book Title</label>
            <input type="text" name="title" id="title">

            <label for="author">Author</label>
            <input type="text" name="author" id="author">

            <label for="summary">Summary</label>
            <textarea name="summary" id="summary"></textarea>

            <label for="price">Price</label>
            <input type="text" name="price" id="price">

            <label for="categories">Category</label>
            <select name="categories" id="categories">
                <option value="0">--- Choose ---</option>
                <?php
                    include("conf/config.php");
                    $sql="SELECT id,name FROM categories";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_assoc($result)):?>
                        <option value="<?php echo $row['id']?>">
                            <?php echo $row['name']?>
                        </option>
                    <?php endwhile; ?>
            </select>

            <label for="cover">Cover</label>
            <input type="file" name="cover" id="cover">

            <br><br>
            <input type="submit" value="Add Book">
            <a href="book_list.php" class="back">Book List</a>
        </form>
    </body>
</html>