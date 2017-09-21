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
        <style>
            form label{
                display: block;
                margin-top: 8px;
            }
        </style>
    </head>
    <body>
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