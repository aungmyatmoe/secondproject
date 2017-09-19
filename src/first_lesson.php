<!--
* Created by PhpStorm.
* User: iVideoSmart
* Developer: Moe
* Date: 19/9/2017
* Time: 6:43 PM
/-->

<html>
    <head><title>First Lesson</title></head>
    <body>
        <h1>Hello, World</h1>
        <p>Today is : <?php echo date("Y m d H:m:i")?></p>
        <p>
            <?php
                $now=time();
                $newyear=strtotime('2018-04-13');

                $sec_left=$newyear-$now;
                echo floor($sec_left / (60*60*24));
            ?>
             days before Happy New Year.
        </p>
    </body>
</html>