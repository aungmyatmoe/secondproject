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
    </head>
    <body>
        <h1>Category List</h1>
        <?php
            include('conf/config.php');
            $sql="SELECT * FROM categories";

            $result=mysqli_query($conn,$sql);
        ?>
        <ul>
            <?php while ($row =mysqli_fetch_assoc($result)): ?>
                <li title="<?php echo $row['remark']?>">
                    <?php echo $row['name']?>
                </li>
            <?php endwhile; ?>
        </ul>

        <a href="cat_new.php" class="new">New Category</a>
    </body>
</html>