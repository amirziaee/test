<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="column">
    <div class="contact">فرم تماس
        <form action="process.php" method="post">
            نام:<input type="text" name="name" required>
            نام کاربری:<input type="text" name="uname" required>
            ایمیل:<input type="email" name="umail" required>
            <textarea name="cm" id="cme" cols="30" rows="10"></textarea>
            <input type="submit" value="ارسال">
        </form>
    </div>

</body>
</html>