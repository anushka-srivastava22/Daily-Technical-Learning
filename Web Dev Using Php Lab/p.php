<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Session Counter</title>
        <style>
            body {
                background-color: pink;
            }
        </style>
    </head>
    <body>
        <p> Welcome to PHP lab </p>
        <?php
            session_start();
            if(isset($_SESSION['counter'])) {
                $_SESSION['counter'] += 1;
            } else {
                $_SESSION['counter'] = 1;
            }
            $msg = "You have visited this page ". $_SESSION['counter'];
            $msg .= " times. ";
        ?>
        <?php echo ($msg); ?>
    </body>
</html>