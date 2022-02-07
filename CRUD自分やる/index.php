<?php
include_once "data.php";
$users = loadData();

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
<body>

<form action="" method="post">
</form>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Delete</th>
    </tr>
    </thead>
    <?php foreach ($users as $index=>$value):?>
    <tr>
        <td><?php echo $index +1 ?></td>
        <td><?php echo $value["name"] ?></td>
        <td><?php echo $value["age"] ?></td>
        <td><a onclick="return confirm('Are you sure?')" href="index.php?action&id=<?php echo $index?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
    <tbody>

    </tbody>
</table>
</body>
</html>
