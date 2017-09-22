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
        <title>Edit Book</title>
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
            $sql="SELECT * FROM books where id=$id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
        ?>
        <ul class="menu">
            <li><a href="book_list.php">Manage Books</a></li>
            <li><a href="cat_list.php">Manage Categories</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <h1>Edit Book</h1>
        <form action="book_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <label for="title">Book Title</label>
            <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>">

            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="<?php echo $row['author'] ?>">

            <label for="summary">Summary</label>
            <textarea name="summary" id="summary"><?php echo $row['summary'] ?></textarea>

            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="<?php echo $row['price'] ?>">

            <label for="categories">Category</label>
            <select name="categories" id="categories">
                <option value="0">--- Choose ---</option>
                <?php
                include("conf/config.php");
                $sql="SELECT id,name FROM categories";
                $result=mysqli_query($conn,$sql);
                while ($cat=mysqli_fetch_assoc($result)):?>
                    <option value="<?php echo $cat['id']?>" <?php if($cat['id'] == $row['category_id']) echo "selected"?>>
                        <?php echo $cat['name']?>
                    </option>
                <?php endwhile; ?>
            </select>

            <br><br>
            <img src="covers/<?php echo $row['cover'] ?>" alt="" height="150">
            <label for="cover">Cover</label>
            <input type="file" name="cover" id="cover">

            <br><br>
            <input type="submit" value="Update Book">
            <a href="book_list.php" class="back">Book List</a>
        </form>
    </body>
</html>