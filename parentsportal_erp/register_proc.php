<?php
require_once "../config.php";
session_start();
$id = mysqli_fetch_assoc($link->query('select max(id) from users'))['max(id)'] + 1;
$password = password_hash("7387652096", PASSWORD_DEFAULT);

$q_p = 'insert into users(`id`, `username`,`password`,`identity`,`dept`) values("' . $id . '","7387652096","' . $password . '",50,"Parents")';
// echo $q_p;
$result = $link->query($q_p);
header('Location: index.php');

?>