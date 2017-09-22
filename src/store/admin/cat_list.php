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
        <title>List of Category</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Category List</h1>
        <?php
            include("conf/auth.php");
            include('conf/config.php');
            $sql="SELECT * FROM categories";
            $result=mysqli_query($conn,$sql);
        ?>
        <ul class="menu">
            <li><a href="book_list.php">Manage Books</a></li>
            <li><a href="cat_list.php">Manage Categories</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <li title="<?php echo $row['remark'] ?>">
                    [ <a href="cat_del.php?id=<?php echo $row['id'] ?>" class="del">del</a> ]
                    [ <a href="cat_edit.php?id=<?php echo $row['id']?>" class="edit">edit</a> ]
                    <?php echo $row['name'] ?>
                </li>
            <?php endwhile; ?>
        </ul>

        <a href="cat_new.php" class="new">New Category</a>
    </body>
</html>