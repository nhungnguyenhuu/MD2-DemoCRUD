<?php
session_start();
include "data.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $user = [
        "name" => $name,
        "age" => $age
    ];
    if (!empty($name)&&!empty($age)) {
        createUser($user);
        header("location:index.php");
    }
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
<form action="" method="post">
    <input type="text" name="name" placeholder="put your name">
    <input type="text" name="age" placeholder="put your age">
    <button>Create</button>
</form>
</body>
</html>
