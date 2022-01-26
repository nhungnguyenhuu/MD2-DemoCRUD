<?php
session_start();
//$_SESSION["user"]=array(
//    ["name"=>"Hoa","age"=>13],
//    ["name"=>"Hung","age"=>1],
//    ["name"=>"Ha","age"=>3],
//
//);
function loadData()
{
    return $_SESSION["user"]??[];

}
function saveData($data)
{
    $_SESSION["user"]= $data;
}
function deleteUser($id)
{
   $users= loadData();
   array_splice($users, $id, 1);
   saveData($users);
}
function createUser($user)
{
    $users = loadData();
    $users[]= $user;
    saveData($users);
}

