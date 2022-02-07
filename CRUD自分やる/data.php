<?php
session_start();
$_SESSION["user"]=
    [
        ["name"=>"Hoa", "age"=>2],
        ["name"=>"Ha", "age"=>3],
    ];
function loadData()
{
    return $_SESSION["user"]??[];
}
function saveData($user)
{
    $_SESSION["user"] = $user;
}
function delete($index)
{
   $users= loadData();
    array_splice($users, $index, 1);
    saveData($users);
}
function createUser($user)
{
    
}