<?php

require_once("config.php");

// $root = new Usuario();
// $root ->loadById(5);
// echo $root;

// $list = Usuario::getList();
// echo json_encode($list);

// $login = new Usuario();
// $login->login("gustavo", "1234");

// $aluno = new Usuario("aluno", "4321");
// $aluno->insert();

$usuario = new Usuario();

$usuario->loadById(17);

$userId = $usuario->getIdusuario();
$usuario->delete();

// $usuario->loadById(2);

// $usuario->update("professor", "a2b1");

echo "usuario " . $userId . " deletado com sucesso" ;

?>