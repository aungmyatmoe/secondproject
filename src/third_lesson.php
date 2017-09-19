<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Developer: Moe
 * Date: 19/9/2017
 * Time: 7:33 PM
 */
-->
<?php
    session_start();
    $auth=isset($_SESSION['auth']);
?>

<html>
    <head>
        <title>Third Lesson</title>
        <style>
            body{
                background: #efefef;
                font-family: Arial;
                color: #333333;
            }

            #wrap{
                width:500px;
                padding: 20px;
                margin: 10px auto;
                border: 4px solid #dddddd;
                background: #ffffff;
            }

            h1{
                margin: 0 0 20px 0;
                padding: 0 0 10px 0;
                border-bottom: 1px solid #dddddd;
            }

            input[type=text], input[type=password]{
                display: block;
                margin-bottom: 10px;
            }

            .msg{
                width: 500px;
                background: #ffd;
                border: 2px solid #ddd;
                text-align: center;
                margin:10px auto;
                font-size: 13px;
                padding: 6px;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <?php if($auth){?>
                <h1>Welcome to My Website</h1>
                <p>You see this because you are an authenticated user. Congratulation!</</p>
                <b><?php echo $_SESSION['id'] ?></b>
                <a href="third_logout.php">Logout</a>
            <?php } else {?>
                <h1>You need to login</h1>
                <form action="third_login.php" method="post">
                    <label for="id">User ID</label><br/>
                    <input type="text" id="id" name="id"><br/>

                    <label for="password">Password</label><br/>
                    <input type="password" id="password" name="password"><br/><br/>

                    <input type="submit" value="Login">
                </form>
            <?php } ?>
        </div>
    </body>
</html>