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
        <title>List of Book</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            include("conf/auth.php");
            include("conf/config.php");
            $sql="SELECT books.*,categories.name FROM books LEFT JOIN categories ON books.category_id=categories.id ORDER by books.created_date DESC";
            $result=mysqli_query($conn,$sql);
        ?>
        <ul class="menu">
            <li><a href="book_list.php">Manage Books</a></li>
            <li><a href="cat_list.php">Manage Categories</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <h1>Book List</h1>
        <ul class="books">
            <?php while($row=mysqli_fetch_assoc($result)): ?>
                <li>
                    <img src="covers/<?php echo $row['cover'] ?>" alt="" align="right" height="140">
                    <b><?php echo $row['title'] ?></b>
                    <i>by <?php echo $row['author'] ?></i>
                    <small>(in <?php echo $row['name'] ?>)</small>
                    <span><?php echo $row['price'] ?></span>
                    <div><?php echo $row['summary'] ?></div>

                    [<a href="book_del.php?id=<?php echo $row['id'] ?>" class="del">del</a>]
                    [<a href="book_edit.php?id=<?php echo $row['id'] ?>">edit</a>]
                </li>
            <?php endwhile; ?>
        </ul>

        <a href="book_new.php" class="new">New Book</a>
    </body>
</html>