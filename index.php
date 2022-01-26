<?php
session_start();
include "data.php";
$users = loadData();
//foreach ($users as $value) {
//    echo $value["name"];
//}
//for($i=0; $i<count($users);$i++){
//    $value = $users[$i];
//   echo $users[$i]["name"];
//   echo $value["name"];
//}
if(isset($_REQUEST["action"])&& isset($_REQUEST["id"])){
    deleteUser($_REQUEST["id"]);
    header("location:index.php");
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
<body>
<a href="create.php">Create New user</a>
<form method="post">


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
    <tbody>
    <?php foreach ($users as $index=>$value):?>
    <tr>
        <td><?php echo $index+1 ?></td>
        <td><?php echo $value["name"] ?></td>
        <td><?php echo $value["age"] ?></td>
        <td><a onclick="return confirm('Are you sure?')" href="index.php?action=delete&id=<?php echo $index ?>">Delete</a></td>


    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
