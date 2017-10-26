<?php
include "functions.php";
$background_color="#fff";
if(isset($_POST['send'])){
    //var_dump($_POST);
    $background_color = select_bg($_POST['background']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:<?php echo $background_color; ?>">
<!--        --><?php //if(is_user_logged_in()): ?>
<!--            <p>Welcome</p>-->
<!--        --><?php //else: ?>
<!--            <a href="#">login</a>-->
<!--        --><?php //endif; ?>

        <?php

//            $a = false;
//            switch ($a){
//                case true:
//                        echo 'TRUE';
//                    break;
//                case false:
//                     echo 'FALSE';
//                    break;
//                default:
//                    echo 'DEFAULT';
//                    break;
//            }

        ?>
<form action="" method="post">
    <input type="radio" name="background" value="blue">BLUE
    <input type="radio" name="background" value="red">RED
    <input type="radio" name="background" value="green">GREEN

    <input type="submit" name="send" value="Send">
</form>


</body>
</html>