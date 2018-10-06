<!--<?php include "data.php"; ?>-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $style; ?>
    <title><?php "تماس با ما"; ?></title>

</head>
<body>
<div class="contact">
    <form action="process.php" method="post">
        نام کاربری:<input type="text" name="username" >
        موضوع:<input type="text" name="nam" id="name" required>
        ایمیل:<input type="email" name="mail">
        پیام خود را بنویسید:<textarea name="comment" id="" cols="30" rows="10"></textarea>
        <input type="submit" class="button">
    </form>


</div>

</body>
</html>