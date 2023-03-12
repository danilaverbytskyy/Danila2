<?php
require 'User.php';

$user = new User;
$user->nickname = "undefined";
$user->password = "undefined";

if (isset($_POST["nickname"])) {
    $user->nickname = htmlspecialchars($_POST["nickname"]);
}
if (isset($_POST["password"])) {
    $user->password = htmlspecialchars($_POST["password"]);
}
$user->DisplayInfo();
