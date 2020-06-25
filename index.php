<?php

require_once("config.php");

// $root = new Usuario();
// $root ->loadById(5);
// echo $root;

// $list = Usuario::getList(2);
// echo json_encode($list);

$login = new Usuario();
$login->login("bruna", "a1b2");
echo $login;

?>