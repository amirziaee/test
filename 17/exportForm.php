<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BaseTemplate</title>
    <link rel="stylesheet" href="../practice/normalize.css">
    <link rel="stylesheet" href="../practice/milligram-rtl.css">
    <link rel="stylesheet" href="../practice/custom.css">
    <script src="../practice/jquery.min.js"></script>

</head>
<body>
Export Database table :
<form action="exportProcess.php" method="post" class="ajaxSubmit">
    <div>
        <select name="export_type"style="direction: ltr">
            <option value="model" >model</option>
            <option value="TEXT">TEXT</option>
            <option value="CSV">CSV</option>
        </select>
        <select name="export_table" style="direction: ltr">
            <option value="users">users</option>
            <option value="posts">posts</option>
            <option value="widgets">widgets</option>
        </select>
    </div>
    <input type="submit" value="Export">
    <div class="result" style="display: none">
        <img src="../milligram/img/ld1.gif" alt="Loading" style="width: 128px">
    </div>
</form>

<script src="../practice/common.js"></script>

</body>
</html>