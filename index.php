<?php

require_once("config.php");

// $root = new Usuario();
// $root ->loadById(5);
// echo $root;

// $list = Usuario::getList();
// echo json_encode($list);

// $login = new Usuario();
// $login->login("gustavo", "1234");

$aluno = new Usuario("aluno", "4321");
$aluno->insert();
echo $aluno;

?>