<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    这是我的首页<!-- 各种模板引擎 后台处理s数据和逻辑 前台处理 样式 显示-->
    <?php foreach( $data as $v){ ?>
    <ul>
        <li><?php echo $v["name"];?></li>
        <li><?php echo $v["age"];?></li>
        <li><?php echo $v["sex"];?></li>
    </ul>
    <?php } ?>
</body>

</html>