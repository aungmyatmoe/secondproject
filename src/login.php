<!--
/**
 * Created by PhpStorm.
 * User: iVideoSmart
 * Date: 19/9/2017
 * Time: 7:12 PM
 */
-->
<?php
    $email=$_GET['email'];
    $password=$_GET['password'];

    if($email && $password){
        echo 'hello, you have provided <b>'.$email.'</b> as your login ID ',
                'and your password is <b>'.$password.'</b>';
    }else{
        echo 'Login ID or password missing! ',
                'Please <a href=\'index.php\'>try again</a>.';
    }
?>